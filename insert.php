<?php
include('dbcon.php');


   //$id = $_POST['user_id'];
   $pass = $_POST['password'];
   $name = $_POST['user_name'];
   $address = $_POST['address'];
   $phone = $_POST['user_phone'];

   $sql = "INSERT INTO `user`(`password`, `user_name`, `address`, `user_phone`,experience_points) VALUES ('$pass','$name','$address','$phone','0')";
   /*sql = "Insert into user  (user_id,password,user_name) values ('2','2','samira')";*/
   // mysqli_query($db,$sql);
    $run = mysqli_query($db,$sql);
  /*if(!mysqli_query($db,$sql)){
   	die('Error inserting values');
   }
   $newrecord = "One record added to database";*/

  header('location:index.php');

?>
