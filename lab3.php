<!DOCTYPE html>
<html>
<head>
	<title>Lab 3</title>
	<style type="text/css">

		footer{
			width: 100vw;
			height: 10vh;
			position: relative;
			background-color: purple;
		}

		li a{
			text-decoration: none;
			color: white;
		}

		li{
			position: relative;
			bottom: 66px;
			left: 75vw;
			list-style: none;
			display: inline-block;
			font-size: 25px;
			padding: 10px;
			font-family: sans-serif;
			/*background-color: black;*/
		}
		
	</style>
</head>
<body>
<?php 

include "header.php";
include "menu.php";

echo "Lab 3a" . "</br>";
	function calculation(){
		$rdmNumber = rand(10, 100);
		$rdmNumber2 = rand(10, 100);

		$add = $rdmNumber + $rdmNumber2;
		$sub = $rdmNumber - $rdmNumber2;
		$multi = $rdmNumber * $rdmNumber2;
		$division = $rdmNumber / $rdmNumber2;

		echo "$rdmNumber" . " " . "+ " . "$rdmNumber2" . " " . " =" . " " . $add . "</br>";
		echo "$rdmNumber" . " " . "- " . "$rdmNumber2" . " " . " =" . " " . $sub . "</br>";
		echo "$rdmNumber" . " " . "* " . "$rdmNumber2" . " " . " =" . " " . $multi . "</br>";
		echo "$rdmNumber" . " " . ": " . "$rdmNumber2" . " " . " =" . " " . $division . "</br>" . "</br>"; 

	};

	calculation();

echo "Lab 3b (tafel van 6)" . "</br>";
	function tafel($number) {
		for ($i= 1; $i <= 10; $i++) { 
			$answer = $number*$i;
			echo "$number" . " "  . "x " . "$i" . "= " . $answer . "</br>";		
		}	
		echo "</br>";
	}

	tafel(6);

echo "Lab 3b (arr)" . "</br>";
	$arr = [3, 5, 8, 12];

	foreach ($arr as $value) {
		tafel($value);
	}
	
include "footer.php";
?>

</body>
</html>