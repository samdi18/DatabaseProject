<?php
   include('dbcon.php');
    session_start();
  
   $admin_check = $_SESSION['login_admin'];
   
   $ses_sql = mysqli_query($db,"select email from admin where email = '$admin_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_admin'])){
      header("location:dbcon.php");
   }
?>