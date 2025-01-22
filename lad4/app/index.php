<?php

echo "Hello World!";

$name = "John Doe";
$age = 25;

$arr = array(1, 2, 3, "win", 5);
$assoc_arr = ["name" => "John Doe", "age" => 25];

echo $arr;
echo "<br>";
var_dump($arr);
echo "<br>";
echo "Hello $name";
echo 'Hello $name';

$object = (object)$assoc_arr;
echo $object->name;
echo $assoc_arr["name"];

echo json_encode($object);

$car = [
    "brand" => "Toyota",
    "model" => "Vios",
    "year" => $plus_fn
];

echo $car["year"](2020, 5);

function sayHello($name) {
    echo "Hello $name";
}

$plus_fn = function ($a,$b){
    return $a + $b;
}



?>

<?php
//database
phpinfo()
?>