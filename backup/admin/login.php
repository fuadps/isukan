<?php

include("dbconnect.php");
session_start();

if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM admin WHERE  username='$username' and password = '$password'";
	
	$result = mysqli_query($connection,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1){
	$_SESSION['username'] = $username;
	
	header('Location: main.html');
	
	}
	else {
	$error = "Invalid Login";
	}
}


?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Admin Login</b></div>
				
            <div style = "margin:30px">
               
               <form method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo @$error;?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>