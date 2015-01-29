<?php
	include('include/connect.php');
	$firstn = mysqli_real_escape_string($conn, trim(strip_tags($_POST['first'])));
	$lastn =mysqli_real_escape_string($conn, trim(strip_tags($_POST['last'])));
	$age = mysqli_real_escape_string($conn,trim(strip_tags($_POST['age'])));
	$month = mysqli_real_escape_string($conn,trim(strip_tags($_POST['month'])));
	$day = mysqli_real_escape_string($conn,trim(strip_tags($_POST['day'])));
	$year = mysqli_real_escape_string($conn,trim(strip_tags($_POST['year'])));

	if((empty($firstn) || empty($lastn) || empty($age) || empty($month) || empty($day) ||
		empty($year)))
	{
		header('Location: addplayer.php?add=fail');
	}
	else
	{
		$name = $firstn . " " . $lastn;
		$birthday = $month . " " . $day . ", " . $year; 
		$sql = "INSERT into `players` (`name`, `first_name`, `last_name`, `age`, `birthday`) values " .
					"('$name', '$firstn', '$lastn', '$age', '$birthday')";
		mysqli_query($conn, $sql) or die (mysqli_error($conn));
		header('Location: addplayer.php?add=successful');
	}
?>

