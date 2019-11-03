<?php
include('dbcon.php');


   
     $user_name = $_POST['username'];
   
   
     $sql = "Delete from user where user_name = '$user_name'";


  if(!mysqli_query($db,$sql)){
    die('Error inserting values');
   }
   $newrecord = "One record added to database";

  header('location:adminwelcome.php');

?>
