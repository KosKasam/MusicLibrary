<!DOCTYPE html>
<html>
<head>
	<title>Customer Credentials</title>
</head>

<body>
<div style="height:900px; background-color: lavender;" align="center">
      <?php
	  
		require("dbconnect.php");
	  
         if(isset($_POST['Customer_add'])) {
			 		
            $C_username = $_POST['C_username'];
			$C_password = $_POST['C_password'];
            $C_email = $_POST['C_email'];
            $C_ccn = $_POST['C_ccn'];
			$Randnum = mt_rand(100000, 999999);
   
            $sql = "INSERT INTO Account values('$Randnum', '$C_email', '$C_password');";
					
			$sql .= "Insert into Account_Settings values('$C_email', '$C_ccn', '$C_username');";
            
			$retval =  mysqli_query($conn, $sql);
			
            if(!$retval) {
               die('Could not enter data: '.mysqli_error($conn));
            }
          
			echo "Entered data Successfully, Return to Frontpage\n";
			?>
			<hr width="50">
			<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
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
                  <input name = "C_username" type = "text" id = "C_username">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Password:</td>
               <td>
                  <input name = "C_password" type = "text" id = "C_password">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Email: </td>
               <td>
                  <input name = "C_email" type = "text" id = "C_email">
               </td>
            </tr>
      
            <tr>
               <td width = "250">Credit Card Number: </td>
               <td> <input name="C_ccn" type= "text" id = "C_ccn"> </td>
            </tr>
            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "Customer_add" type = "submit" id = "Customer_add"  value = "Create">
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