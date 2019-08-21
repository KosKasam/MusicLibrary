<!DOCTYPE html>
<html>

   <head>
      <title>Search Stuff</title>
   </head>

   <body>
   <div style="height:900px; background-color: lavender;" align="center">
   <?php
		$i_album = "";
		$i_artist = "";
		require("dbconnect.php");
		if(isset($_POST['Search'])){
			$i_song = $_POST['i_song'];
			$i_album = $_POST['i_album'];
			$i_artist = $_POST['i_artist'];
			
			if($i_song == ""){
				$sql = "select Song_name from Song natural join Is_Part_Of natural join Album where Album_name = '$i_album' and Artist_name = '$i_artist';";
				$result = $conn->query($sql);
				if($result){
					echo "<br><h2> Here are the songs from the album $i_album by $i_artist</h2> <br>";
					echo "<br><h3> Enter your username and type the song you want to add or type 'All' to add all</h3>"?>
					<form method = "post" action = "<?php $_PHP_SELF ?>">
					<table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
					<tr>
						<td width = "250">Username: </td>
						<td>
						<input name = "AddSongUser" type = "text" id = "AddSongUser">
						</td>
					</tr>
					<tr>
						<td width = "250">Song: </td>
						<td>
						<input name = "SongSelected" type = "text" id = "SongSelected">
						</td>
					</tr>
					<tr>
						<td>
						<input name = "SongAdd" type = "submit" id = "SongAdd"  value = "Add">
						</td>
					</tr><?php
					echo '<table border>';
					echo '<tbody>';

					while($row = $result->fetch_assoc()) {
						echo '<tr>';
						echo "<td>" . $row["Song_name"]. "</td>";
						echo '</tr>';
					}
	
					echo '</tbody>';
					echo '</table>';
	
				} else {
					echo "0 results";
				}?>
				<hr width="50">
				<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
				<hr width="50">
				</div><?php
			}else if($i_album == ""){
				$sql = "select Song_name from Song natural join Produced natural join Artist where Song_name = '$i_song' and Artist_name = '$i_artist';";
				$result = $conn->query($sql);
				if($result){
					echo "<br><h2> Here is the song $i_song by $i_artist</h2> <br>";
					echo "<br><h3> Type the song in the text box to add to your library</h3>"?>
					<form method = "post" action = "<?php $_PHP_SELF ?>">
					<table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
					<tr>
						<td width = "250">Username: </td>
						<td>
						<input name = "AddSongUser" type = "text" id = "AddSongUser">
						</td>
					</tr>
					<tr>
						<td width = "250">Song: </td>
						<td>
						<input name = "SongSelected" type = "text" id = "SongSelected">
						</td>
					</tr>
					<tr>
						<td>
						<input name = "SongAdd" type = "submit" id = "SongAdd"  value = "Add">
						</td>
					</tr><?php
					echo '<table border>';
					echo '<tbody>';

					while($row = $result->fetch_assoc()) {
						echo '<tr>';
						echo "<td>" . $row["Song_name"]. "</td>";
						echo '</tr>';
					}
	
					echo '</tbody>';
					echo '</table>';
	
				} else {
					echo "0 results";
				}?>
				<hr width="50">
				<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
				<hr width="50">
				</div><?php
				mysqli_close($conn);
			}
		}else if(isset($_POST['SongAdd'])){
			$i_username = $_POST['AddSongUser'];
			$i_song = $_POST['SongSelected'];
			
			$sql = "select Acount_ID from Account natural join Account_Settings where username = '$i_username';";
			$userID = $conn->query($sql);
			
			if($i_song == "All"){
				$sql = "select Song_ID from Is_Part_Of natural join Album where Album_name = '$i_album' and Artist_name = '$i_artist';";
				$allSongs = $conn->query($sql);
				while($row2 == $allSongs->fetch_assoc()){
					$sql = "insert into Has_In_Library values('$userID', '".$row2["Song_ID"]."';)";
					$result = mysqli_query($conn, $sql);
				}
				echo "<h3> Songs Added<br> Return to Customer Home</h3>"?>
				<hr width="50">
				<a href="CustomerHome.php" style="color:blue;font-weight:bold;">Back</a>
				<hr width="50">
				</div><?php
			}else{
				$sql = "select Song_ID from Is_Part_Of natural join Album where Album_name = '$i_album' and Artist_name = '$i_artist';";
				$singleSong = $conn->query($sql);
				while($row2 == $singleSong->fetch_assoc()){
					$sql = "insert into Has_In_Library values('$userID', '".$row2["Song_ID"]."';)";
					$result = mysqli_query($conn, $sql);
				}
				echo "<h3> Song Added<br> Return to Customer Home</h3>"?>
				<hr width="50">
				<a href="CustomerHome.php" style="color:blue;font-weight:bold;">Back</a>
				<hr width="50">
				</div><?php
			}
			mysqli_close($conn);
		}else{
			?>
	
	  <br><br><br><br>
     <p>Look up music<br> </p>
	 <p>Type in an artist's name and/or a song name or album name</p><br>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Song: </td>
               <td>
                  <input name = "i_song" type = "text" id = "i_song">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Album: </td>
               <td>
                  <input name = "i_album" type = "text" id = "i_song">
               </td>
            </tr>
			<tr>
               <td width = "250">Artist: </td>
               <td>
                  <input name = "i_artist" type = "text" id = "i_artist">
               </td>
            </tr>
			<tr>
               <td width = "250"> </td>
               <td>
                  <input name = "Search" type = "submit" id = "Search"  value = "Search">
               </td>
            </tr>
        
			
         </table>
		 
    <?php
		mysqli_close($conn);
		}
	?>
	  
   <hr width="50">
<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
<hr width="50">
   </div>
   
   </body>
</html>