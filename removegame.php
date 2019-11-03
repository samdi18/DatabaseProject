<html class="welcome-bg">
   <head>
      <meta charset="utf-8">
      <title>Remove Game</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
     
     
     	<div class="butndsgn">
      <form>
      	<input type="submit" formaction = "adminwelcome.php" value="HOME">
       </form>
	   </div>
	
     
      <div class="buyBox">
         
         <h2>Enter Game Name Here</h2>
         <form action = "deletegame.php" method = "post">
            <p>Game Name</p>
            <input type="text" name="gamename" placeholder="Enter Game Name">
                       
            <input type="submit" value="REMOVE GAME">
            
            
         </form>
      </div>
   </body>
</html>
