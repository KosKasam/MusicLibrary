<!DOCTYPE html>
<html>

   <head>
      <title>Artist Login</title>
   </head>

   <body>
   <div style="height:900px; background-color: lavender;" align="center">
   
	  <br><br><br><br>
     <p>Enter Your Account credentials <br> </p>
      <form method = "post" action = "ArtistHome.php">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Username: </td>
               <td>
                  <input name = "ALogin_username" type = "text" id = "ALogin_username">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Password: </td>
               <td>
                  <input name = "ALogin_password" type = "text" id = "ALogin_password">
               </td>
            </tr>
			<tr>
               <td width = "250"> </td>
               <td>
                  <input name = "ALogin" type = "submit" id = "ALogin"  value = "Login">
               </td>
            </tr>
        
			
         </table>
   
	  
   <hr width="50">
<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
<hr width="50">
   </div>
   
   </body>
</html>