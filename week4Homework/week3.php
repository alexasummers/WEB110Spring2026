<!DOCTYPE html>
<html>
<head>
	<title> Mini PHP Quiz </title>
</head>
<body>
	<h1> Mini PHP Quiz </h1>
	
<form method="POST">
	<label>Name: </label>
	<input type="text" name="name">
	
	<br><br>
	
	<label>Question 1: 5+5 = ? </label>
	<input type="text" name="q1">
	
	<br>
	<br>
	
	<label> Question 2: Which is a relational
	operator?</label><br>
	<input type="radio" name="q2" value="=="> == <br>
	<input type="radio" name="q2" value="+"> + <br>
	<input type="radio" name="q2" value="*"> * <br>
	
	<br>
	
	<label> Question 3: True or False: 10 > 5 AND 3 > 7</label>
	<input type="text" name="q3">
	
	<br><br>
	
	<button type="submit"> Submit Quiz! </button>
	</form>
	
<hr>

<?php 
$name = $_POST["name"] ?? "";
$q1 = $_POST["q1"] ?? "";
$q2 = $_POST["q2"] ?? "";
$q3 = $_POST["q3"] ?? "";

if ($name != "") {
	echo "<h2>Hello, $name</h2>";
}

$score = 0;

if ($q1 == 5 + 5) {
	$score++;
}

if ($q2 == "==") {
	$score++;
}

if ($q3 == "false") {
	$score++;
}

echo "<p> Your score: $score</p>";

echo "<h3>Operator Precedence Demo </h3>";
echo "5 + 3 * 2 = " . (5 + 3 * 2) . "<br>";
echo "(5 + 3) * 2 = " . ((5 + 3) * 2) . "<br>";

echo "<h3>Result message </h3>";

if ($score == 3) {
	echo "<p>Perfect score!</p>";
} elseif ($score == 2) {
	echo "<p>Nice job!</p>";
} else {
	echo "<p> Keep practicing!</p>";
}

echo "<h3> Leveled Switch </h3>";

switch ($score) {
	case 3:
		echo "<p>Gold level</p>";
		break;
	case 2:
		echo "<p>Silver level</p>";
		break;
	case 1:
		echo "<p>Bronze level</p>";
		break;
	default:
		echo "<p>Beginner level</p>";
}

echo "<h3>Status</h3>";
$status = ($score >= 2) ? "You passed!" : "Try again!";
echo "<p>$status</p>";

echo "<h3>For Loop</h3>";
for ($i = 1; $i <=5; $i++) {
	echo "Attempt $i<br>";
}

echo "<h3> While Loop </h3>";
$i = 0;

while ($i < 5) {
	$i++;
	
	if ($i == 3) {
		continue;
	}
	echo "Current number: $i<br>";
}

echo "<h3>Do...while</h3>";
$j = 1;

do {
	echo "Number: $j<br>";
	
	if ($j == 2) {
		break;
	}
	$j++;
} while($j <= 5);

echo "<h3> Final Message </h3>";

$finalMessage = ($score == 3) ? "You crushed it!"
	: "Thanks for playing!";
	echo "<p>$finalMessage</p>";
?>

</body>
</html>
