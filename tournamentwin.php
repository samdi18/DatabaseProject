
<?php
   include("dbcon.php");
   
   session_start();



     $username= $_SESSION['login_user'];
   
       
      $GameName = mysqli_real_escape_string($db,$_POST['gamename']); 

      

    $qry=" SELECT distinct(user_name) FROM `mygames` WHERE game_name= '$GameName' order by RAND() ";

     $go= mysqli_query($db,$qry);
     $cnt= mysqli_num_rows($go);

    
       
       $rows=mysqli_fetch_assoc($go);
       


    
     
     
     
//header('location:welcome.php');
    
?>


<html class="tournamentwin-bg">
   <head>
      <meta charset="utf-8">
      <title>Winner</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
     
     
     	<div class="butndsgn">
      <form>
      	<input type="submit" formaction = "welcome.php" value="HOME">
      	
      </form>
      </div>

       <div>
      	
      	<h1 align="center"> <font size="200" color="#000080">THE WINNER IS</font></h1>

      </div>
      
      <div class="neotext2">
      	
      	<h1><?php echo $rows['user_name'] ?></h1>
      </div>
	   
	   
	   
	
     
       </body>
</html>
