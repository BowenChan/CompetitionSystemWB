<?php
	$name = $_POST['name'];
	$age = $_POST['age'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];

	if((empty($name) || empty($age) || empty($month) || empty($day) ||
		empty($year)))
		header('Location: addplayer.php?add=fail');
	else
	{
		$birthday = $month . " " . $day . ", " . $year; 
		header('Location: addplayer.php?add=successful');
	}
?>

