<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
     $country = $_POST['country'];
     $state = $_POST['state'];
     $comm = $_POST['comm'];
     $price = $_POST['price'];
     $licence = $_POST['licence'];
	 $sql = "INSERT INTO register (first_name,last_name,email,password,country,state,comm,price,licence)
	 VALUES ('$first_name','$last_name','$email','$password','$country','$state','$comm','$price','$licence')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>