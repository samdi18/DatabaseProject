   <html class="welcome-bg">
   <head>
      <meta charset="utf-8">
      <title>Add Games</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
     
     
     	<div class="butndsgn">
      <form>
      	<input type="submit" formaction = "adminwelcome.php" value="HOME">
       </form>
	   </div>
	
     
      <div class="addgamebox">
         
         <h2>Enter Game Info Here</h2>
         <form action = "admininsert.php" method = "post">
            
            <p>Game ID</p>
             
             <input type="text" name="gameid" placeholder="Enter Game ID">
             
            
            <p>Game Name</p>
            <input type="text" name="gamename" placeholder="Enter Game Name">
             
             <p>Game Genre</p>
             
             <input type="text" name="gamegenre" placeholder="Enter Game Genre">
             <p>Game Specs</p>
             
             <input type="text" name="gamespecs" placeholder="Enter Game specs">
             
             
             <p>Game Rating</p>
             
             <input type="text" name="gamerating" placeholder="Enter Game Rating">
             
             
             
             <p>Game Price</p>
             
             <input type="text" name="gameprice" placeholder="Enter Game Price">
             
             
            <input type="submit" value="ADD GAME">
            
            
         </form>
      </div>
   </body>
</html>
