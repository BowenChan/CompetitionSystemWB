<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create A Match</title>
<link rel = "stylesheet" type= "text/css" href = "css/style.css"/>
</head>
<?php $sports = array("Table Tennis", "Volleyball", "Badminton"); ?>
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
        <p style = 'text-align:center;padding:10px 0;'>Which sport would you like to play</p>
        <form method = "GET" style= "text-align:center; margin:0 auto">
    		<select>
            	<?php
					foreach ($sports as $x)
                    	print "<option value='" . $x . "' style = 'margin: 0 auto'>" . $x . "</option>";
                ?>
          	</select>
            <br><br>
            <input type = "submit" value = " Submit "></input>
        </form>
        </div>
        
        <div id = "footer">
        </div>
    </div>
    <div style="clear:both;overflow:auto;"></div>
    
 
</div>
</body>
</html>