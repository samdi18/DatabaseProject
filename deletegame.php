<?php
include('dbcon.php');


   
   $GameName = mysqli_real_escape_string($db,$_POST['gamename']);  
   
   
   $sql = "Delete from game where game_name = '$GameName'";


  $run= mysqli_query($db,$sql);
  header('location:adminwelcome.php');

?>
