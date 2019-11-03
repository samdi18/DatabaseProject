<?php
   include("dbcon.php");
   
   session_start();



     $username= $_SESSION['login_user'];
   
       
      $GameName = mysqli_real_escape_string($db,$_POST['gamename']);  
	  $qry="SELECT * FROM `game` WHERE game_name= '$GameName'";
	   $go= mysqli_query($db,$qry);
       
       $cnt= mysqli_num_rows($go);
	  
	   
	  if($cnt == 1){
	   
	   $sql="INSERT INTO `mygames`(`user_name`, `game_name`) VALUES ('$username','$GameName')";
	   $sql2 = "UPDATE `user` SET experience_points = experience_points+5 WHERE user_name = '$username'";


	   
	   
	   $run= mysqli_query($db,$sql);
	   $run= mysqli_query($db,$sql2);
	   
	   }
	   
header('location:welcome.php');
	  
   

?>
