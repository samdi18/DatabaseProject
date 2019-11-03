<?php
 include_once('dbcon.php');   
 session_start();

    $uname=$_SESSION['login_user'];
    
	$query="select game_name from mygames WHERE user_name='$uname'";
	$result=mysqli_query($db,$query);
?>


<html class="welcome-bg">
   
   <head>
      <title>Your Games</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
   <body>
      <div class="welcome">
      	
      	<h1 align="center">YOUR GAMES</h1>
      
      
      </div>
       	<div class="butndsgn">
      <form>
      	<input type="submit" formaction = "welcome.php" value="HOME">
       </form>
	   
      
       <table align="center"  border="6px" style="   border-color: #961517; width:400px; line-height: 40px;margin-top:60px;background-color: rgba(0,0,0,.7);">
        <tr>
            <th colspan="1"><h2 style="color:  #FFFFFF">Game List </h2></th>
        </tr>
       <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
			
			
         ?>   
      	

            <tr>
               <td style="color:  #FFFFFF; font-weight: bold; text-align: center;"><?php echo $rows['game_name']; ?>
                </td>
     
					</tr>
              
    <?php         
        }
    ?>    
    </table>

      <div>

      	
      </div>
   </body>
   
</html>







