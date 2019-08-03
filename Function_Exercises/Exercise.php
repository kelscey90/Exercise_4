<?php
include 'Exercise_1.php';
include 'Exercise_2.php';
include 'Exercise_3.php';
$a = 50;
$b = 30;
$c = 20;
$d = 10;
$e = 40;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercise</title>
	<style>
		*{
			font-family: Segoe UI light;
		}

		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		echo "<h1>Exercise</h1><hr>";
		/*-------------------------------------------------------------------------------------*/
		echo "<h3>Exercise 1</h3>";
		printValue('Hello World');
		/*-------------------------------------------------------------------------------------*/
		echo "<h3>Exercise 2</h3>";
		echo printvalue(addition($a, $b));
		echo printvalue(subtraction($a, $b));
		echo printvalue(multiplication($a, $b));
		echo printvalue(division($a, $b));
		/*-------------------------------------------------------------------------------------*/
		echo "<h3>Exercise 3</h3>";
		echo printvalue(average($a, $b, $c, $d, $e));
	?>
</body>
</html>