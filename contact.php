<?php 
include ("nav.php"); 
?>
<!DOCTYPE html>
<html>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  *{
    margin: 0;
    padding: 0;
  }
  .contact{
    justify-content: center;
    padding: 100px 100px 80px 430px;
            background:rgba(0, 0, 0, 0.7) url('df.jpg');
            background-size: cover;
            background-blend-mode: darken;
            height: 77vh;
            color: antiquewhite;
  }
  .w3-center{

    text-align: ;
  }
  .w1-border{
height: 30px;
margin: 8px;
  }
  .w2-border{
    margin: 6px;
    height: 100px;
    border: 2px solid red;
    border-radius: 5px;
  }
  .w3-row {
  /* background-color: brown; */
  height: 50px;
  }
  .w3-r1est{
    height: 500px;
  }
  .w3-input {
    width: 500px;
    height: 150pxpx;
  }
  .w3-blue{
    border: 2px solid black;
    margin: 120px 100px 0px 200px;
    border-radius: 10px;
    background-color: chartreuse;
    width: 90px;
    height: 30px;
  }
  .w3-blue:hover{
    cursor: pointer;
  opacity: 0.8;
  }
  .w3-xxlarge .fa fa-pencil
  {
    height: 200px;
  }
</style>
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<body>
<div class="contact">


<form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">Contact Us</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w1-border" name="first" type="text" placeholder="First Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w1-border" name="last" type="text" placeholder="Last Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w1-border" name="email" type="text" placeholder="Email">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w1-border" name="phone" type="text" placeholder="Phone">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w2-border" name="message" type="text" placeholder="Message">
    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"><b>SEND</b> </button>
</p>
</form>
</div>
</body>
</html> 
