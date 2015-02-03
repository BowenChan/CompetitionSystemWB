
<script type = 'text/javascript'>
 

	        function disableSelect(button){
	                document.getElementById('select' + (button * 2 - 1)).disabled = true;
	                document.getElementById('select' + (button * 2)).disabled = true;
	                document.getElementById('start' + (button)).disabled = true;
	        };
 		
</script>
<?php
	require_once('include/connect.php');
	$sql = "SELECT * from `". $usertable . "`";
	$res = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($res))
	{
		$users[] = $row['name'];
	}
	print_r($users);
	function createview($court)
	{
		global $users;
		$j = 1;
		$k = 1;
		for($i = 1; $i <= $court; $i++)
		{	
		/*
		if($i%(round($court/2,0,PHP_ROUND_HALF_UP)) == 1)
			echo "<tr>";
		*/
		if($i%3 == 1)
			echo "</tr>";
		echo "<td class = 'check'> Court " . $i;
		echo "<form><select id = 'select" . $j++ ."'>";
		foreach($users as $name)	
			echo "<option value = ".$name . ">" . $name . '</option>';
		echo "</select>";
		echo " vs. ";
		echo "<select id = 'select" . $j++. "'>";
		foreach($users as $name)	
			echo "<option value = ".$name . ">" . $name . '</option>';
		echo "</select>";
		echo "<p> <button id = 'start". $k++ ."' type = button value = start name = start onClick = \"disableSelect(" . ($k - 1) . ");\" > start match  </button></p> ";
		echo "</form>";
		echo "</td>";
		if($i%3 == 0)
			echo "</tr>";
		/*
		if($i%(round($court/2,0,PHP_ROUND_HALF_UP)) == 0)
			echo "</tr>";
		*/
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel = "stylesheet" type= "text/css" href = "css/style.css"/>
<title>Competition System</title>
</head>

<body>
<div id = "container">
<!-- Left and right div --> 
<!--<div class = "sideL"> </div>
    <div class = "sideR"></div> -->
<div class = "center">
<div id = "header">
<?php include('header.php'); ?>
</div>
<div id = "body">
  <?php

	$sport = $_GET['sport'];
	$court = $_GET['number'];
	echo "<div>";
	echo "<table style = 'border: 2px blue solid;' >";
	
	createview($court);
	
	
	echo "</table>";
	echo "</div>";

?>
</div>
<div id = "footer"></div>
</div>
<div style="clear:both;overflow:auto;"></div>
</div>
</body>
</html>