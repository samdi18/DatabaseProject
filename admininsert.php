<?php
include('dbcon.php');



   $gameid = $_POST['gameid'];
   $gname = mysqli_real_escape_string($db,$_POST['gamename']);
   $genre = $_POST['gamegenre'];
   $specs = 
     mysqli_real_escape_string($db,$_POST['gamespecs']);
   
   $rating = $_POST['gamerating'];
   $price = $_POST['gameprice'];
   
  
   /*$sql = "Insert into game  (game_id,game_name,genre,specs,screenshots,rating,price) values ('$gameid','$gname','$genre','$specs','','$rating','$price')";*/
  
  $sql="INSERT INTO `game`(`game_id`, `game_name`, `genre`, `specs`, `rating`, `price`) VALUES ('$gameid','$gname','$genre','$specs','$rating','$price')";



$run = mysqli_query($db,$sql);
  /*if(!$run){
	  
	  echo ("FAILED");
  }


 else{ */header('location:addgame.php');

?>
