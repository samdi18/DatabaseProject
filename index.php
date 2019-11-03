<?php
   include("dbcon.php");
   
session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT user_name FROM user WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
	   
	   
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         $_SESSION['pswd']= $mypassword;
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

?>




<html class="login-bg">
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      
        <div class="butndsgn">
      <form>
      	<input type="submit" formaction = "adminlogin.php" value="ADMIN LOGIN">
       
      </form>

          </div>
          
          
          <div class="abtbtn">
      <form>
      	<input type="submit" formaction = "about.php" value="ABOUT">
       
      </form>

	   </div>
        
        
        
        
        
        <div class="loginBox">
         
         <h2>Log In Here</h2>
         <form action = "index.php" method = "post">
            <p>User Name</p>
            <input type="text" name="username" placeholder="Enter User Name">
            <p>Password</p>
            <input type="password" name="password" placeholder="••••••">
            <input type="submit" value="Sign In">
            <input type="submit" formaction = "signup.php" value="Sign up">
            
         </form>
      </div>
   </body>
</html>
