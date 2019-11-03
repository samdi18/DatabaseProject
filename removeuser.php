
   <html class="welcome-bg">
   <head>
      <meta charset="utf-8">
      <title>Remove User</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
     
     
     	<div class="butndsgn">
      <form>
      	<input type="submit" formaction = "adminwelcome.php" value="HOME">
       </form>
	   </div>
	
     
      <div class="buyBox">
         
         <h2>Enter User Name Here</h2>
         <form action = "deleteuser.php" method = "post">
            <p>User Name</p>
            <input type="text" name="username" placeholder="Enter User Name">
                       
            <input type="submit" value="REMOVE USER">
            
            
         </form>
      </div>
   </body>
</html>
