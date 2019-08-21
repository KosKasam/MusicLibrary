<!DOCTYPE html>
<html>
<head>
	<title>Artist Credentials</title>
</head>

<body>
<div style="height:900px; background-color: lavender;" align="center">
      <?php
	  
		require("dbconnect.php");
	  
         if(isset($_POST['ArtistCreate_Enter'])) {
            
            $A_username = $_POST['A_username'];
			$A_password = $_POST['A_password'];
			
			$Randnum = mt_rand(100000, 999999);
   
            $sql = "INSERT INTO Artist values('$Randnum', '$A_username');";
			$sql .= "Insert into Artist_Account values('$A_username', '$A_password');";
            
			$retval = mysqli_query($conn, $sql);
			
			if(!$retval){
				echo "Could not enter data".mysqli_error($conn);?>
				<hr width="50">
				<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
				<hr width="50">
				</div><?php
			}
			
          
			echo "Entered data Successfully, Return to Frontpage";
           	mysqli_close($conn);?>
			<hr width="50">
			<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
			<hr width="50">
			</div><?php
		 }
		 ?>
		 
<hr width="50">
<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
<hr width="50">
</div>

</body>		 
</html>