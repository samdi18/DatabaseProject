<?php
   include('session.php');
      //session_start();
   $usr = $_SESSION['login_user'];

$sql1 = "SELECT user_name from user where user_name in (SELECT user_name from topten) and user_name = '$usr' ";
$go = mysqli_query($db,$sql1);
$row = mysqli_fetch_array($go,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($go);

?>


<html class="welcome-bg">
   
   <head>
      <title>Game Khelte Shame Nai</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
   <body>
      <div class="welcome">
        
        <h1 align="center">Game Khelte Shame Nai</h1>
        
      </div>

      
        
        <?php
          if($count == 1)
         {
          ?>
          <div class="welcome">
          <h1 align="center"><?php echo 'You are eligible to 10% discount!' ?></h1>
         <?php 
         }
        ?>
      </div>

      <div class="butndsgn">
      <form>
      	<input type="submit" formaction = "logout.php" value="LOG OUT">
       
      </form>
      
        </div>
        
         <div class="tournamentbtn">
      <form>
      	<input type="submit" formaction = "tournamentwelcome.php" value="JOIN TOURNAMENT">
       
      </form>
      
        </div>

        
        
        <div class="WelcomeBox">
        <form>
      	<input type="submit" formaction = "profile.php" value="Profile">
       
      </form>
       <form>
      	<input type="submit" formaction="library.php" value="Your Games">
       
      </form>
       <form>
      	<input type="submit" formaction="store.php" value="Store">
       
      </form>
      
     <form>
      	<input type="submit" formaction = "newtop.php" value="TOP 10">
       
      </form>
      
        	
        	
        </div>
      
      
   </body>
   
</html>
