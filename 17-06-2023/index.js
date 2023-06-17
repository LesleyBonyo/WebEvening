console.log("Hello World External JS");

{
	let newVariable = 16; //block scope
}

//console.log(newVariable); gives an error
// Single line comment

/* Multiple line 

comment */
//naming of variables: firstName

// data types: number, string, boolean, object, undefined, null,arrays
let firstName; //undefined
//let firstName = 15;

var lastName = "Lara"; // string
var lastName = "Fred";
const age = 13; // number
let registration = true; //boolean
let school = null, classDetails = undefined;
console.log(typeof lastName); //string
lastName = 15;
console.log(typeof lastName); //number

//console.log(typeof registration);
let studentNames = ["Alice", "John", "Amina"]; //array
studentNames[1] = "Joel";
console.log(typeof studentNames);
console.log("The student is called " + studentNames[1]);

//object
let unitDetails = {
	//properties
	unitName: "Web Development",
	unitTime: "Saturday",
	venue: "Masinga",
	//methods
	getUnitDetails: function(){
		console.log("This is the " + this.unitName 
			+ " class. It happens on " + this.unitTime 
			+ " at " + this.venue);
	}
}
//call the method of the object
unitDetails.getUnitDetails();
// access object properties
console.log(unitDetails.unitName)

//object 2
let homeDetails = {
	//properties
	home: "Madaraka",
	streetAdress: 152,
	wifi: true,

	//method
	getWifi: function(){
		console.log("Do you have wifi?" + this.wifi);
	}
}

// objectName.Property
console.log(homeDetails.home);
//objectName.method()
console.log(homeDetails.getWifi());

//functions
function myFunction(){
	console.log("This is myFunction");
}
myFunction();
//function 2
function getSum(){
	let num1 = 2, num2 = 8; //local scope
	return num1 + num2 + age;
}
//console.log(num2); will give an error

let mySum = getSum();
console.log("My sum is", mySum);
// function 3 with parameters
function getProduct(num1,num2){
	return num1 * num2;
}

console.log("My product is", getProduct(10,52));
//comparison operators: > < == === != >= <=
//arithmetic operators: + - / * %
//logical operators: && - and || - or

// conditional statements
let studentMark = 45;
if (studentMark < 50){
	console.log("Fail");
}
else if (studentMark == 50) {
	console.log("Average");
}
else {
	console.log("Pass");
}
//looping
// for loop
for (let j = 1; j < 6; j++){
	myFunction();
	//escape characters
	console.log("\n \t");
}

//DOM
let myParagraph = document.getElementById("myParagraph");
console.log(myParagraph)

//getElementsByTagName
//getElementsByClassName































