<!DOCTYPE html>
<html>
<head>
	<title>Lab 2</title>
	<style type="text/css">

		footer{
			width: 100vw;
			height: 10vh;
			position: relative;
			top: 46vh;
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

// 1
	echo("<h1>Hello World!</h1>");
// 2
	define("Message", "Hello World!", true);

	echo "<h1>" . Message . "</h1>";
// 3
	$learning = "Learning PHP";
	$hw = "Hello world!";

	echo "<h1>" . $learning . "</h1>";
	echo "<h1>" . $hw . "</h1>";
// 4
	$hello = "Hello ";
	$world = "world!";

	echo "<h1>" . $hello . $world . "</h1>";
// 5 
	$txt = array("Hello", "world!"); 

	echo "<h1>" . $txt[0] . " " . $txt[1] . "</h1>";

include "footer.php";
?>

</body>
</html>