<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel = "stylesheet" type= "text/css" href = "css/style.css"/>
<?php $sports = array(
	"TT" => "Table Tennis",
	"VB" => "Volleyball", 
	"BD" => "Badminton"); ?>
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
        <p style = 'text-align:center;padding:10px 0;'>Which sport would you like to play</p>
        <form method = "GET" style= "text-align:center; margin:0 auto" action = "tournamenthandle.php">
    		<select name = 'sport'>
            	<?php
					foreach ($sports as $y => $x)
                    	print "<option value='" . $y . "' style = 'margin: 0 auto'>" . $x . "</option>";
                ?>
          	</select>
            <br><br>
            <p> How many brackets would you like </p>
            <select name = 'bracket'>
            	<?php
					for($i = 1; $i <= 4; $i++)
						print "<option value='" . $i . "' style = 'margin: 0 auto'>" . $i . "</option>";
				?>
            </select>
            <br><br>
            <p> How many people are in this tournament </p>
            <br>
            <select name = 'participant'>
            	<?php
					for($i = 1; $i <= 32; $i++)
						print "<option value='" . $i . "' style = 'margin: 0 auto'>" . $i . "</option>";
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