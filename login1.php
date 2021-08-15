<?php 
include ("nav.php"); 
?>
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px 300px 5px 300px;
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 20px 22px 0px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px ;
  margin: 8px 0px ;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
  padding: 16px 250px 5px 250px;
}
.clss{
  padding: 16px 170px 5px 650px;
border-radius: 5px;
}
    </style>
</head>
<body>
 
  <div class="container">
   <center><h1>LOGIN FORM</h1></center> 
    <form action="/cwfphp/action_page.php" method="POST">
        
          <center><p>Please fill in this form to login into your account.</p></center>
          
          <hr>
          <!-- <label for="username"><b>User Name</b></label>
          <input type="text" placeholder="Enter User Name" name="username" id="username" required> -->
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
          
          <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
          <hr> -->
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p></div>
          <div class="clss">
          <a href="farmercontact.php" <button type="submit" class="registerbtn">Login</button></a>
        
      
        <!-- <div class="container signin"> -->
          <br><br><p>Don't have an account? <a href="form2.php">Register</a>.</p></div>
        <!-- </div></div> -->
      </form>
</body>
</html>