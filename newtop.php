

<?php
 $db = mysqli_connect('localhost','root','', 'gksn');
 include('session.php');

    
	$query="SELECT * from user where experience_points>10";
	$result=mysqli_query($db,$query);
?>


<html class="welcome-bg">
   
   <head>
      <title>topten</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
   <body>
      <div class="welcome">
      	
      	<h1 align="center">TOP TEN USERS</h1>

        </div>
        <div class="butndsgn">
      <form>
        <input type="submit" formaction = "welcome.php" value="HOME">
       </form>
     </div>
  
       
      
       <table align="center"  border="6px" style="   border-color: #961517; width:1200px; line-height: 40px;margin-top:60px;background-color: rgba(0,0,0,.7);">
        <tr>
            <th colspan="6"><h2 style="color:  #FFFFFF;">THE TOP TEN </h2></th>
        </tr>
        <t>
            <th style="color:  #FFFFFF"> User ID </th>
            <th style="color:  #FFFFFF;"> Name </th>
            <th style="color:  #FFFFFF"> Address </th>
            <th style="color:  #FFFFFF"> XP </th>          
           
        </t>
    <?php 

    $i =0;
    
        while($rows=mysqli_fetch_assoc($result) )
        {
          if($i == 10){
            break;
          }
          $value = $rows['user_name'];
			   $qry = "INSERT into topten values ('$value','10%')";
         $run = mysqli_query($db,$qry);

			
         ?>   
      	

            <tr>
                <td style="color:  #FFFFFF;"><?php echo ($i+1); ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['user_name']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['address']; ?></td>
                <td style="color:  #FFFFFF;"><?php echo $rows['experience_points']; ?></td>

                
                
     
					</tr>
              
    <?php 
    $i++;        
        }
        
    ?>    
    </table>

      <div>

      	
      </div>
   </body>
   
</html>