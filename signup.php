
<html class="signup-bg">

<head>
      
      <title>Signup Form</title>
      <link rel="stylesheet" href="style.css">
   </head>
   

<style>
body {font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana," sans-serif", Helvetica; color: #FFFFFF;}
{box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background-color: rgba(0,0,0,.4);
	color: #FFFFFF;

	
	
}

input[type=text]:focus, input[type=password]:focus {
    background-color: rgba(0,0,0,.7);
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: rgba(0,0,0,.65);
    color: #009A0C;
    
	height: 50px;
	line-height: 25px;
	padding: 10px 20px;
    outline: none;
    border: 4px solid #009A0C;
	font-family:Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana," sans-serif";
    cursor: pointer;
	font-size: 22px;
	letter-spacing: 5px;
	font-weight: bold;
	text-transform: uppercase;
	border-radius: 0px;
    text-align: center;
    overflow: hidden;
	transition: 0.3s;

	}

button:hover {
    color: #00FF1D;
	border: 4px solid #00FF1D;
	text-shadow: 0 0 5px #00FF1D;
	box-shadow:  0 0  25px #00FF1D, inset 0 0  25px #00FF1D;

}


.rsetbtn {
    padding: 14px 20px;
    background-color: #B02628;
}

.signupbtn {
  float: left;
  width: 15%;
}
.rsetbtn {
  float: right;
  width: 20%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for reset button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .rsetbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="insert.php" method = "post" style="border: 0px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

     <label for="user_name"><b>Enter Name</b></label>
    <input type="text" placeholder="Name" name="user_name">

    
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">

   
    <label for="address"><b>Enter Address</b></label>
    <input type="text" placeholder="Address" name="address">
   
    <label for="user_phone"><b>Enter Phone</b></label>
    <input type="text" placeholder="Phone" name="user_phone">

   	

    <div class="clearfix">
      
      <button type="submit" class="signupbtn">Submit</button>
     
      
      
    </div>
  </div>
</form>
 
</body>
</html>


