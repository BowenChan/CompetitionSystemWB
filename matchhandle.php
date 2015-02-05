<?php
	require_once('include/connect.php');
	$sql = "SELECT * from `". $usertable . "`";
	$res = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($res))
	{
		$users[] = $row['name'];
	}
?>

<script type = 'text/javascript'>
			
			

	        function nameCheck(firstname, secondname){
	        	
	        	if(firstname == secondname){
	        			return false;
	        	}
	        	else{
	        		return true;	
	        	}
	        };
			
	        function disableSelect(button, court){
	        			
	        		var first = document.getElementById('select' + (button * 2- 1 )).value;
					var second = document.getElementById('select' + (button * 2)).value;
					
		            if(nameCheck(first,second)){
		                document.getElementById('select' + (button * 2 - 1)).disabled = true;
		                document.getElementById('select' + (button * 2)).disabled = true;
		                document.getElementById('start' + (button)).disabled = true;
	            		var user = <?php echo json_encode($users) ?>;
		            	for(var i = 1; i <= court*2; i++)
		            	{
		            		if(i != (button * 2) && i != (button * 2 - 1)){
			         	  		var temp = document.getElementById('select' + (i));
				           		for(var j = temp.length -1; j >= 0; j--)
				           		{	
				           			if(temp[j].value == first || temp[j].value == second)
				           			{
				           				temp.remove(j);
				           			}
				            	}
		            			
		            		}
	            		}
		            }
		           	else{
		           		alert("Please do not select the same person");
		           	}
		            	
	        
			};
 		
</script>
<?php
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
		echo "<p> <button id = 'start". $k++ ."' type = button value = start name = start onClick = \"disableSelect(" . ($k - 1) . "," . $court . ");\" > start match  </button></p> ";
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