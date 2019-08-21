<!DOCTYPE html>
<html>

   <head>
      <title>Customer Login</title>
   </head>

   <body>
   <div style="height:900px; background-color: lavender;" align="center">

<?php

require("dbconnect.php");
	
$sql = "select Song_Name from Song natural join Has_In_Library natural join Account natural join Account_Settings where Account_Settings.username = '$CLogin_username'";
$result = $conn->query($sql);

if (!$result) {
	
	echo "<br><h3> Songs In Your Library <h3> <br>";
	
	echo '<table border>';

	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["Song_Name"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}


?>

<hr width="50">
<a href="CustomerHome.php" style="color:blue;font-weight:bold;">Back</a>
<hr width="50">
   </div>
   
   </body>
</html>
