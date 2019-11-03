<?php
   include("dbcon.php");
   
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $adminemail = mysqli_real_escape_string($db,$_POST['adminemail']);
      $adminpassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT email FROM admin WHERE email = '$adminemail' and password = '$adminpassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
	   
	   
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_admin'] = $adminemail;
         $_SESSION['pswd']= $adminpassword;
         header("location: adminwelcome.php");
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
      	<input type="submit" formaction = "index.php" value="HOME">
       
      </form>
      


</div>

        
        
        
        
        
        <div class="loginBox">
         
         <h2>Log In Here</h2>
         <form action = "adminlogin.php" method = "post">
            <p>ADMIN EMAIL</p>
            <input type="text" name="adminemail" placeholder="Enter Admin Email">
            <p>PSSWORD</p>
            <input type="password" name="password" placeholder="••••••">
            <input type="submit" value="Sign In">
            
            
         </form>
      </div>
   </body>
</html>
