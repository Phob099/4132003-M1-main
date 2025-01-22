<?php
header('Content-Type: application/json');
require 'condb.php';

$method = $_SERVER['REQUEST_METHOD'];
$response = ['status' => 'error', 'message' => 'Invalid request'];

switch ($method) {
    case 'GET'
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $stmt = $conn->prepare("SELECT * FROM tb_blog WHERE id = ?");
            $stmt ->bind_param("i", $id);
            $result = $stmt->get_result();
            $blog = $result->fetch_assoc();

            if($blog){
                $response = ['status'=>'success','data'=> $blog];
            }else{
                $response =['status'=>'error','message'=>'blog not found'];
            }
        } else{
            //get all
            $stmt = $conn->prepare("SELECT * FROM tb_blog");
            $stmt ->execute();
            $result = $stmt ->get_result();

            while($row = $stmt->get_result()){
                $blog[] = $row;
            }
            $response = ['status'=>'success','data' => $blog];
        }
        break;








    case 'POST': // Insert new blog
        $title = $_POST['title'] ?? null;
        $post = $_POST['post'] ?? null;

        if ($title && $post) {
            $stmt = $conn->prepare("INSERT INTO tb_blog (title, post, createAt) VALUES (?, ?, NOW())");
            $stmt->bind_param("ss", $title, $post);
            if ($stmt->execute()) {
                $response = ['status' => 'success', 'message' => 'Blog inserted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Insert failed: ' . $conn->error];
            }
            $stmt->close();
        } else {
            $response = ['status' => 'error', 'message' => 'Title and Post are required'];
        }
        break;

        //curl -X POST -d "title=My Blog&post=This is my first post" http://localhost:8080/php/blog.php

    }
?>