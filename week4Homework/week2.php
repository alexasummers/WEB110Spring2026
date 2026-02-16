<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Week 2 Demo </title>
	<style>
		body {
			font-family: Arial, sans-serif;
			padding: 20px;
		}
		
		h2{
			color: #2c3e50;
		}
		
		.box {
			background: #f4f4f4;
			padding: 15px;
			margin-bottom: 20px;
			border-left: 5px solid #3498db;
		}
	</style>
</head>

<body>

<h1> Week 2 Demo </h1>

<?php
echo "<p>Hello from PHP!</p>";

$firstName = "Alexa";
$age = 27;
$isStudent = true;

echo "<div class='box'>";
echo "<h2>Variables</h2>";
echo "<p>Name: $firstName</p>";
echo "<p>Age: $age </p>";
echo "<p>Student? $isStudent </p>";
echo "</div>";

$a = 10;
$b = 3;

$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;

$fullName = $firstName . " Summers";

echo "<div class='box'>";
echo "<h2>Operators</h2>";
echo "<p> $sum </p>";
echo "<p> $difference </p>";
echo "<p> $product </p>";
echo "<p> $quotient </p>";
echo "<p> $fullName </p>";
echo "</div>";

define("SCHOOL_NAME", "Web Dev College");
const MAX_STUDENTS = 30;

echo "<div class='box'>";
echo "<h2>Constants</h2>";
echo "<p>School: " . SCHOOL_NAME . "</p>";
echo "<p>Max Students: " . MAX_STUDENTS . " </p>";
echo "</div>";

function greetStudent($name) {
	return "Welcome to PHP, $name!";
}

$greeting = greetStudent($firstName);

echo "<div class='box'>";
echo "<h2>Functions</h2>";
echo "<p>$greeting</p>";
echo "</div>";

echo "<div class='box'>";
echo "<h2>Simple Logic</h2>";

if ($age >= 18) {
	echo "<p>You are an adult student</p>";
}
 else {
	 echo "<p> You are a minor</p>";
 }
 echo "</div>";

?>

</body>
</html>