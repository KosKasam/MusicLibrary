<!DOCTYPE html>
<html>

   <head>
      <title>Customer Homescreen</title>
   </head>

   <body>
   <div style="height:900px; background-color: lavender;" align="center">
	  <br><br><br><br>

<?php 
		 require("dbconnect.php");
		 if(isset($_POST['CLogin'])){
			
			$C_username = $_POST['C_username'];
			$C_password = $_POST['C_password'];
			
			
			$sql = "Select * from Account natural join Account_Settings where Account.password = \"$C_password\"";
			
	
			$retval = mysqli_query($conn, $sql);
			
			
			if(!$retval){
				echo "Login Failed Check username or password or create and account".mysqli_error($conn);?>
				<hr width="50">
				<a href="CustomerAccountCreate.php" style="color:blue;font-weight:bold;">Create Account</a>
				<hr width="50">
				<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
				<hr width="50">
				</div><?php
			} 
			
			echo "Login Successful";?>
			<table border = "0" cellspacing = "10" cellpadding = "2">
            <tr>
               <td><a href="Search.php" style="color:black;font-weight:bold;">Search</a></td>
			   <td><a href="" style="color:black;font-weight:bold;">Change Account Settings</a></td>
            </tr>
        
			
			</table>
			<?php
	
			$sql = "select Song_Name from Song natural join Has_In_Library natural join Account natural join Account_Settings where Account_Settings.username = '$C_username';";
			$result = $conn->query($sql);

			if ($result) {
	
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
			mysqli_close($conn);
		 }
		
		 ?>
		 
	
<hr width="50">
<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
<hr width="50">
</div>
   
   </body>
</html>