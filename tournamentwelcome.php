<?php
include('dbcon.php');

include('session.php');
      //session_start();
?>
<html class="tournamentwelcome-bg">
   
   <head>
      <title> </title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
   <body>
      <div class="butndsgn">
      	 <form>
      	<input type="submit" formaction = "welcome.php" value="HOME">
       </form>
      	
      </div>
      <div class="neotext2">
      	
      	<h1>WELCOME TO ARENA</h1>
      </div>
        
        
         <div class="tournamentbtn">
      <form>
      	<input type="submit" formaction = "tounamentgames.php" value="AVAILABLE GAMES">
       
      </form>
      
        </div>

        
       
      
   </body>
   
</html>
