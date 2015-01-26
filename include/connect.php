<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$db ="CWB";
	$link = mysqli_connect($server, $username,$password);
	$dbc =mysqli_connect($servername, $username, $password, $db);
	if (!$dbc){
		echo "failed";
	}
	$db_selected = mysql_select_db($db, $link);
	if(!$db_selected){
		$sql = 'CREATE DATABASE ' . $db;
		if(mysql_query($sql,$link)){
			echo " Database connected";
		}else{
			echo "Database already exist";
		}
	}
?>