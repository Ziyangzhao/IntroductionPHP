<?php 



	$time = date(G)+1; // Shows current hour
	date_default_timezone_set("Europe/Amsterdam");

	if($time >= 6 && $time < 12){
		// $image = 'images/morning.png';
		$day = 'morgen!';
		$class = 'morning';
	} elseif ($time >= 12 && $time < 18){
		// $image = 'images/afternoon.png';
		$day = 'middag!';
		$class = 'afternoon';
	} elseif ($time >= 18 && $time < 23){
		// $image = 'images/evening.png';
		$day = 'avond!';
		$class = 'evening';
	} elseif ($time >= 0 && $time < 6) {
		// $image = 'images/night.png'; 
		$day = 'nacht!';
		$class = 'night';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 1</title>

<style type="text/css">
	html {
		background-size: cover;
// 		background-image: url(<?php echo $image; ?>);
	}

	.morning {
		background-image: url("images/morning.png");
	}

	.afternoon {
		background-image: url("images/afternoon.png");
	}

	.evening {
		background-image: url("images/evening.png");
	}

	.night {
		background-image: url("images/night.png");
	}			

	#txt{
		color: white;
		font-family: 'BrushScript BT', cursive;
		font-size: 50px;
		position: relative;
		top: 40vh;
		left: 70vh;
	}

	#currentTime{
		color: white;
		font-family: 'BrushScript BT', cursive;
		font-size: 50px;
		position: relative;
		top: 15vh;
		left: 72vh;
	}

	footer{
		width: 100vw;
		height: 10vh;
		position: relative;
		top: 55vh;
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
<body class="<?php echo $class;?>">
<?php include "header.php" ?>
<?php include "menu.php"; ?>
<?php $time; ?>

	<p id="txt">Het is nu <?php echo date("H:i") ?></p> <!-- h = 12 | H = 24 -->
	<p id="currentTime">Goede <?php echo $day; ?></p>

<?php include "footer.php"; ?>

</body>
</html>