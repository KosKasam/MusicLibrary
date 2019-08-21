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
		 if(isset($_POST['ALogin_username'])){
			
			$ALogin_username = $_POST['ALogin_username'];
			$ALogin_password = $_POST['ALogin_password'];
			
			$sql = "Select * from Artist_Account where password = \"$ALogin_password\"";
	
			$retval = mysqli_query($conn, $sql);
			
			if(!$retval){
				echo "Login Failed Check username or password or create and account";?>
				<hr width="50">
				<a href="ArtistAccountCreatePage.html" style="color:blue;font-weight:bold;">Create Account</a>
				<hr width="50">
				<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
				<hr width="50">
				</div><?php
			}
			
			echo "Login Successful";?>
			<table border = "0" cellspacing = "10" cellpadding = "2">
            <tr>
               <td><a href="" style="color:black;font-weight:bold;">Upload Song</a></td>
               <td><a href="UploadAlbum.php" style="color:black;font-weight:bold;">Upload Album</a></td>
            </tr>
        
			
			</table>
			<?php
		 
	
			$sql = "select Album_name from Album where Artist_name = '$ALogin_username'";
			$result = $conn->query($sql);

			if ($result) {
	
				echo "<br><h3> Your Albums <h3> <br>";
	
				echo '<table border>';

				echo '<tbody>';

			while($row = $result->fetch_assoc()) {
					echo '<tr>';
					echo "<td>" . $row["Album_name"]. "</td>";
					echo '</tr>';
				}
	
				echo '</tbody>';
				echo '</table>';
	
				// output data of each row
    
	
			} else {
				echo "0 results";
			}
		 }
		
		 ?>
		 
	
<hr width="50">
<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
<hr width="50">
</div>
   
   </body>
</html>