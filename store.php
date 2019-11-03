<?php
 include_once('dbcon.php');   
 include('session.php');

    
	$query="select * from game";
	$result=mysqli_query($db,$query);
?>


<html class="welcome-bg">
   
   <head>
      <title>Store</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
   <body>
      <div class="welcome">
      	
      	<h1 align="center">LIST OF GAMES</h1>
      
      
      </div>
       	<div class="butndsgn">
      <form>
      	<input type="submit" formaction = "welcome.php" value="HOME">
       </form>
	   </div>
      
      <div class="Buybtn">
      <form>
      	<input type="submit" formaction = "buy.php" value="BUY GAMES">
       </form>
	   </div>
       
      
       <table align="center"  border="6px" style="   border-color: #961517; width:1200px; line-height: 40px;margin-top:60px;background-color: rgba(0,0,0,.7);">
        <tr>
            <th colspan="6"><h2 style="color:  #FFFFFF;">Available Now!!! </h2></th>
        </tr>
        <t>
            <th style="color:  #FFFFFF"> Game_id </th>
            <th style="color:  #FFFFFF;"> Name </th>
            <th style="color:  #FFFFFF"> Genre </th>
            <th style="color:  #FFFFFF"> Requirements </th>
                       
                       
            <th style="color:  #FFFFFF"> Rating </th>
            <th style="color: #FFFFFF"> Price </th>
           
        </t>
    <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
			
			
         ?>   
      	

            <tr>
                <td style="color:  #FFFFFF;"><?php echo $rows['game_id']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['game_name']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['genre']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['specs']; ?></td>
                
                                
                <td style="color:  #FFFFFF;"><?php echo $rows['rating']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['price']; ?>
                
     
					</tr>
              
    <?php         
        }
    ?>    
    </table>

      <div>

      	
      </div>
   </body>
   
</html>







