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
        <?php include('header.php'); 
			require_once('include/connect.php');
			?>
        </div>
        
        <div id = "body"></div>
        <table>
            <tr>
                <td> Name </td>
                <td> Birthday </td>
            </tr>
            <?php
                $query = mysqli_query($conn,"SELECT * FROM `" . $usertable . "`");
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
                {
                    echo "<tr> ". 
                    "<td>" . $row['name'] . "</td>" .
                    "<td>" . $row['birthday'] . "</td>" .
                    "</tr>";
                }
                mysqli_free_result($query);

            ?>
        </table>
        <div id = "footer">
        </div>
    </div>
    <div style="clear:both;overflow:auto;"></div>
    
 
</div>
</body>
</html>