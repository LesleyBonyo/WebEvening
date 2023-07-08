<?php
//single line comment php code here
# single line comment
/* multiple
line comment */
$firstName = "Clara";
$age = 14;
$height = 12.3;
$school = false;
$students = [1,2,3,4];
$subjects = array('ics','bbit','bcom');
$class = null;

// echo var_dump($firstName);
// function without any parameters
function getSum()
{
	$num1 = 20;
	$num2 = 24;
	echo $num1 + $num2;
}

getSum();
getSum();
// function with parameters
function getProduct($num1,$num2){
	return $num1 * $num2;
}
$myProduct = getProduct(23,10);
echo "<h2>Your product is $myProduct</h2>";
// echo $num1;
//conditional statements
if ($age == 18){
	echo "The right age";
} elseif ($age > 18) {
	echo "Too old";
} else {
	echo "Too young";
}








/*
echo "<br>Hello world $firstName <br>";
echo "You are ".$age." years old";

*/

?>