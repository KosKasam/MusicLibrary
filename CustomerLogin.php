<!DOCTYPE html>
<html>

   <head>
      <title>Customer Login</title>
   </head>

   <body>
   <div style="height:900px; background-color: lavender;" align="center">
   
	  <br><br><br><br>
     <p>Enter Your Account credentials <br> </p>
      <form method = "post" action = "CustomerHome.php">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Username: </td>
               <td>
                  <input name = "C_username" type = "text" id = "C_username">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Password: </td>
               <td>
                  <input name = "C_password" type = "text" id = "C_password">
               </td>
            </tr>
			<tr>
               <td width = "250"> </td>
               <td>
                  <input name = "CLogin" type = "submit" id = "CLogin"  value = "Login">
               </td>
            </tr>
        
			
         </table>
   
	  
   <hr width="50">
<a href="Frontpage.html" style="color:blue;font-weight:bold;">Home</a>
<hr width="50">
   </div>
   
   </body>
</html>