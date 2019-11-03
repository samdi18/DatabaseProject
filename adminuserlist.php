<?php
 include_once('dbcon.php');   
 include('adminsession.php');

    
	$query="select * from user";
	$result=mysqli_query($db,$query);
?>


<html class="welcome-bg">
   
   <head>
      <title>Store</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
   <body>
      <div class="welcome">
      	
      	<h1 align="center">LIST OF USERS</h1>
      
      
      </div>
       	<div class="butndsgn">
      <form>
      	<input type="submit" formaction = "adminwelcome.php" value="HOME">
       </form>
	   </div>
      
             
       <table align="center"  border="6px" style="   border-color: #961517; width:1200px; line-height: 40px;margin-top:60px;background-color: rgba(0,0,0,.7);">
        <tr>
            <th colspan="5"><h2 style="color:  #FFFFFF;">On Storage System</h2></th>
        </tr>
        <t>
            <th style="color:  #FFFFFF"> User Id </th>
            <th style="color:  #FFFFFF;"> Name </th>
            <th style="color:  #FFFFFF"> Adress </th>
            <th style="color:  #FFFFFF"> Phone Number </th>
            <th style="color:  #FFFFFF"> Ecperience Points </th>
            
           
        </t>
    <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
			
			
         ?>   
      	

            <tr>
                <td style="color:  #FFFFFF;"><?php echo $rows['user_id']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['user_name']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['address']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['user_phone']; ?></td>
                
                                
                <td style="color:  #FFFFFF;"><?php echo $rows['experience_points']; ?></td>
                                
     
			</tr>
              
    <?php         
        }
    ?>    
    </table>

      <div>

      	
      </div>
   </body>
   
</html>
