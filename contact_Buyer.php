<?php 
include ("nav.php"); 
?>

<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $phone = $_POST['phone'];
	 $district = $_POST['district'];
	 $post = $_POST['post'];
     $pin = $_POST['pin'];
     
     
     
     $price = $_POST['price'];
	 $sql = "INSERT INTO farmercontact (name,phone,district,post,pin,price)
	 VALUES ('$name','$phone','$district','$post','$pin','$price')";
	 if (mysqli_query($conn, $sql)) {
		
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Buyer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Bcontainer">
    <form action="#" method="post">
    <input class="states" name="name" type="text" placeholder="Enter Name"required><br><br>
    <input class="states" name="phone" type="text" placeholder="Enter Your Phone Number" required><br><br>
    <input class="states" name="district" type="text"placeholder="Enter Your District Name" required><br><br>
    <input class="states" name="post" type="text" placeholder=" Post Office" required><br><br>
    <input class="states" name="pin" type="text" placeholder="Pin Code"><br><br>
     <input class="states" name="price" type="text" placeholder="Enter price you want">*optional<br><br>
     <p class="q">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button class="subt" name="save" type="submit" class="registerbtn">SEND</button>
</form>
</div>
</body>
</html>