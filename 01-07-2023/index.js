function getProduct(){
	let num1 = 
	document.getElementById('number1');
	let num2 = 
	document.getElementById('number2');
	let myProduct = (num1.value * num2.value);
	//console.log(myProduct);
	//alert("My product is " + myProduct);
	document.getElementById('result').innerHTML = 
	"Product is " + myProduct;
	return false;
}

//change attribute of html elements
function changeImage(){
	let myImage = document.getElementById('myImage');
	myImage.src = "cat.jpg";
	return false;
}
function restoreImage(){
	document.getElementById('myImage').src =
	 'cutecat.jpg';
	 return false;
}
// add or change style of html elements
let ourImage = document.getElementById('myImage');
ourImage.style.borderRadius = '50px';





