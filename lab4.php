<!DOCTYPE html>
<html>
<head>
	<title>Lab 4</title>
<style type="text/css">

		footer{
			width: 100vw;
			height: 10vh;
			position: relative;
			top: 72vh;
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

// cmd + shift + f | Search and replace

	define("GAME", "Monopoly");
	define("WantToPlay", true);
	define("MINUTES", 3);

	if (GAME == "Yathzee") {
		if (WantToPlay == true) {
			if (MINUTES > 15 && MINUTES < 30) {
				$answer = "Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd";
			} elseif (MINUTES < 15 || MINUTES > 30) {
				$answer = "Je wilt Yathzee spelen want dat vindt je gewoon leuk";
			}
		} else if (WantToPlay == "false") {
			if (MINUTES > 100) {
				$answer = "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien";
			} elseif (MINUTES <= 100) {
				$answer = "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten halen";
			}
		}
	} 

	if (GAME == "Monopoly") {
		if (WantToPlay == true) {
			if (MINUTES == 1) {
				$answer = "Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg";
			} elseif (MINUTES > 1) {
				$answer = "Je wilt Monopoly spelen want je houd er van om iedereen blut te maken";
			}
		} else if (WantToPlay == "false") {
			if (MINUTES == 2 || MINUTES > 120) {
				$answer = "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur";
			} else {
				$answer = "Je wilt Monopoly niet spelen want je houd niet van hotels";
			}
		}
	} 

	if (GAME == "Schaken") {
		if (WantToPlay == true) {
			if (MINUTES == 2) {
				$answer = "Je wilt Schaken want je vindt zwart en wit leuk";
			} elseif (MINUTES <> 2) {
				$answer = "Je wilt Schaken want je denkt slimmer dan mij te zijn";
			}
		} else if (WantToPlay == "false") {
			if (MINUTES == -1) {
				$answer = "Je wilt echt niet schaken";
			} else {
				$answer = "Je wilt gewoon niet schaken";
			}
		}
	} 

	echo $answer;

include "footer.php";

?>
</body>
</html>