<?php
include("dbcon.php");
session_start();

  $username= $_SESSION['login_user'];
  $userpassword =  $_SESSION['pswd'];

$qurey = "SELECT* FROM user WHERE user_name = '$username' and password = '$userpassword'";
      $run = mysqli_query($db,$qurey);

 $info = mysqli_fetch_array($run,MYSQLI_ASSOC);
 
     




?>



<!doctype html>
<html class="welcome-bg">
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div class="butndsgn">
      <form>
      	<input type="submit" formaction = "welcome.php" value="HOME">
       
      </form>
      


</div>
	
	<table align="center"  border="6px" style="   border-color:#961517;width: 500px; line-height: 40px;margin-top:180px; background-color: rgba(0,0,0,.7); text-align: center;">
		
		
		<tr>
			
			<td style="color: #FFF; font-weight: bold; font-size: large ">
				Name:
				<?php
				print_r($info['user_name']);
				?>
			</td>
			
		</tr>
		<tr>
			
			<td style="color: #FFF; font-weight: bold;font-size: large">
				
				User ID ### 
				<?php
				print_r($info['user_id']);
				?>
				
			</td>
		</tr>
		<tr>
			
			<td style="color: #FFF; font-weight: bold;font-size: large">
				
				Address:
				<?php
				print_r($info['address']);
				?>
				
			</td>
		</tr>
		<tr>
			
			<td style="color: #FFF; font-weight: bold;font-size: large">
				
				Phone Number:
				<?php
				print_r($info['user_phone']);
				?>
				
			</td>
		</tr>
		<tr>
			
			<td style="color: #FFF; font-weight: bold;font-size: large">
				
				Experience Points:
				<?php
				print_r($info['experience_points']);
				?>
				
			</td>
		</tr>
		
		
		
		
	</table>
	
	
	
</div>

</body>
</html>