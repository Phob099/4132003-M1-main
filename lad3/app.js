document.getElementById("message1").innerHTML = "Hello world";

let a = 5;
var b = "hello";
const x = 10;

console.log(b);

add(5, 10);

// function
function add(aa, bb) {
  let cc = aa + bb;
  console.log(cc);
  return cc;
}
let result = add(5, 10);

let add2 = function (aa, bb) {
  let cc = aa + bb;
  console.log(cc);
};
let add3 = (aa, bb) => {
  let cc = aa + bb;
  console.log(cc);
};

//   Array
let arr = [1, 2, 3, 4, 5];
const car = [];
car[0] = "toyota";
car[1] = "Honda";
const fruit = new Array("apple", "banana", "cherry");
console.log(car[1]);

let colors = [[1, 2, 3], "green", "blue"];
console.log(colors[0][2]);

//   arraymethob
fruit.push("orenge");
console.log(fruit);

arr.map((item) => {
  console.log(item);
});

//   object
let person = {
  firstName: "john",
  lastName: "doe",
  age: 50,
  child: ["Ann", "billy"],
  fullname: function () {
    return this.firstName + "" + lastName;
  },
};

person.address = {
  street: "123 main st",
  city: "new york",
};
console.log(person.fullname());

// spread operator
const arrCombine = [...car, ...fruit];
const arrCombine2 = [car, fruit];
console.log(arrCombine);
console.log(arrCombine2);

//short term if else
let e = x == 10 ? "yes" : "No";
