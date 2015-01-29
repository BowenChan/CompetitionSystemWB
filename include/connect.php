<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$db ="CWB";
	$usertable = "players";
	$records = "records";
	$link = mysqli_connect($server, $username,$password);
	/*
	$dbc =mysqli_connect($servername, $username, $password, $db);
	if (!$dbc){
		echo "failed";
	}*/
	
	$db_selected = mysqli_select_db($link,$db);
	if(!$db_selected){
		$sql = 'CREATE DATABASE ' . $db;
		$res = mysqli_query($link, $sql) or die(mysqli_error($link));
	
		
		
	}
	mysqli_close($link);
	/*creating the connection */
	$conn = new mysqli($server, $username, $password, $db);

	$sql2 = "CREATE TABLE IF NOT EXISTS ". $usertable ." (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
			name VARCHAR(30) NOT NULL,
			first_name VARCHAR(30) NOT NULL,
			last_name VARCHAR(30) NOT NULL,
			age INT(50) NOT NULL,
			birthday VARCHAR(30) NOT NULL
			);";
			
			$res1 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
			
		$sql3 = "CREATE TABLE IF NOT EXISTS ". $records ." (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			player1 VARCHAR(30) NOT NULL,
			player2 VARCHAR(30) NOT NULL,
			gamescore1 INT(6) NOT NULL,
			gamescore2 INT(6) NOT NULL,
			matchscore1 VARCHAR(30),
			matchscore2 VARCHAR(30),
			matchscore3 VARCHAR(30)
			);";
			/*Check for Tables */
			$res2 = mysqli_query($conn, $sql3) or die (mysqli_error($conn));
	
	

		
?>