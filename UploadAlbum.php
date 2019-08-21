<!DOCTYPE html>
<html>
<head>
	<title>Upload Album</title>
</head>

<body>
<div style="height:900px; background-color: lavender;" align="center">
      <?php
	  
		require("dbconnect.php");
	  
         if(isset($_POST['upload'])) {
			 	
			$Randnum = mt_rand(100000, 999999);
			$i_name = $_POST['i_name'];
			$i_album_name = $_POST['i_album_name'];
			$num_songs = $_POST['num_songs'];
            
			$sql = "insert into Album values('$Randnum', '$i_album_name', '$i_name', '$num_songs')";
            
			$retval =  mysqli_query($conn, $sql);
			
            if(!$retval) {
               echo 'Could not upload album, return to homepage '.mysqli_error($conn);
			   ?>
				<hr width="50">
				<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
				<hr width="50">
				</div>
				<?php
            }
          
			echo "Upload Successful, Return to Artist homepage\n";
			?>
			<hr width="50">
			<a href="ArtistHome.php" style="color:blue;font-weight:bold;">Back</a>
			<hr width="50">
			</div>
			<?php
           	mysqli_close($conn);
		 }
		
		 else {
		?>
<p>Enter Your information<br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Username: </td>
               <td>
                  <input name = "i_name" type = "text" id = "i_name">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Album Name:</td>
               <td>
                  <input name = "i_album_name" type = "text" id = "i_album_name">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Number of Songs: </td>
               <td>
                  <input name = "num_songs" type = "text" id = "num_songs">
               </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "upload" type = "submit" id = "upload"  value = "Upload">
               </td>
            </tr>
			
         </table>
		 
		 <?php
		 }
		 ?>
		 
<hr width="50">
<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
<hr width="50">
</div>

</body>		 
</html>