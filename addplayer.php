<?php
	session_start();
?>
<!doctype html>
<html>
<script language = 'Javascript' type="text/javascript">
	function month()
	{
		
	}
						
</script>
<head>
<meta charset="utf-8">
<link rel = "stylesheet" type= "text/css" href = "css/style.css"/>
<title>Add a player</title>
</head>
<?php
	$month = array(
		'January' => 31,
		'February' => 28,
		'March' => 31,
		'April' => 30,
		'May' => 31,
		'June' => 30,
		'July' => 31,
		'August' => 31,
		'September' => 30,
		'October' => 31,
		'November' => 30,
		'December' => 31
		);

?>
<body>
<div id = "container">
	<!-- Left and right div -->
    <!--<div class = "sideL"> </div>
    <div class = "sideR"></div> -->
    <div class = "center">
        <div id = "header">
        <?php include('header.php'); ?>
        </div>
        
        <div id = "body"></div>
        	<form onChange="month()">
            	<p> Name: <input type="text" value = "name"></p>
                <p> Age: <select name = 'age'>
            	<?php
					for($i = 1; $i <= 70; $i++)
						echo "<option value='" . $i . "' style = 'margin: 0 auto'>" . $i . "</option>";
				?>
          	  </select></p>
            	<p> Birthday: <select name = 'month' onChange="month()" >
                <option value = '' style = 'margin:0 auto'> Select a month </option>
                <?php
                	foreach($month as $mon => $day)
					{
						
						echo "<option value='" . $mon . "' style = 'margin: 0 auto'>" . $mon . "</option>";
					}
            	?>
            	</select>
            	<select name 'day'>
                <option value = '' style = 'margin:0 auto'> Select a day </option>
				<?php
					
						for($k = 1; $k <= 31;$k++)
						{
							print "<option value='" . $k . "' style = 'margin: 0 auto'>" . $k . "</option>";
						}
				?>
                	</select>
                    
          		<select name 'year'>
                <option value = '' style = 'margin:0 auto'> Select a year </option>
				<?php
					
						for($k = 1990; $k <= 2014;$k++)
						{
							print "<option value='" . $k . "' style = 'margin: 0 auto'>" . $k . "</option>";
						}
				?>
                	</select>
                    
               <p> <button value = " submit " name = "submit" >  Submit  </button></p> 
            </form>
            	
        <div id = "footer">
        </div>
    </div>
    <div style="clear:both;overflow:auto;"></div>
    
 
</div>
</body>
</html>