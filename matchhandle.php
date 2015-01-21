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
	
	echo "<table style = 'border: 2px blue solid;'>";
	
	for($i = 1; $i <= $court; $i++)
	{
		if($i%(round($court/2,0,PHP_ROUND_HALF_UP)) == 1)
			echo "<tr>";
		echo "<td> Court " . $i. "</td>";
		if($i%(round($court/2,0,PHP_ROUND_HALF_UP)) == 0)
			echo "</tr>";
		
	}
	
	
	echo "</table>";
		
?>
</div>
<div id = "footer"></div>
</div>
<div style="clear:both;overflow:auto;"></div>
</div>
</body>
</html>