<!DOCTYPE html>
<html>
<head>
	<title>Upload Song</title>
</head>

<body>
<div style="height:900px; background-color: lavender;" align="center">
      <?php
	  
		require("dbconnect.php");
	  
         if(isset($_POST['Upload'])) {
			 	
			$Randnum = mt_rand(10000000, 99999999);
			$song_name = $_POST['song_name'];
			$genre = $_POST['genre'];
			$length = $_POST['length'];
			$username = $_POST['username'];
			$album = $_POST['album'];
			
			$sql = "insert into Song values('$Randnum', '$song_name', '$genre', '$length')";
			$retval1 =  mysqli_query($conn, $sql);
			$sql = "insert into"
			
            if(!$retval) {
               echo 'Could not upload song, return to homepage '.mysqli_error($conn);
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
                  <input name = "username" type = "text" id = "username">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Song Name:</td>
               <td>
                  <input name = "song_name" type = "text" id = "song_name">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Genre: </td>
               <td>
                  <input name = "genre" type = "text" id = "genre">
               </td>
            </tr>
			
			<tr>
               <td width = "250">Length: </td>
               <td>
                  <input name = "length" type = "text" id = "length">
               </td>
            </tr>
			
			<tr>
               <td width = "250">Album: </td>
               <td>
                  <input name = "album" type = "text" id = "album">
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