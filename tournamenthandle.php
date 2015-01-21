<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel = "stylesheet" type= "text/css" href = "css/style.css"/>
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
	$court = $_GET['participant'];
	$bracket = $_GET['bracket'];
	
	for($j = 1; $j <=$bracket; $j++)
	{
		
		echo "<table style = 'border: 2px blue solid;'> ";
		echo "<th colspan='".round($court/2,0,PHP_ROUND_HALF_UP) ."' style = 'padding: 20px 0; margin:0 auto;'> Tournament " . $j . "</th>";
		
		for($i = 1; $i <= $court; $i++)
		{
			if($i%(round($court/2,0,PHP_ROUND_HALF_UP)) == 1)
				echo "<tr>";
			echo "<td> Court " . $i. "</td>";
			if($i%(round($court/2,0,PHP_ROUND_HALF_UP)) == 0)
				echo "</tr>";
			
		}
		
		
		echo "</table>";
	}
?>
</div>
<div id = "footer"></div>
</div>
<div style="clear:both;overflow:auto;"></div>
</div>
</body>
</html>