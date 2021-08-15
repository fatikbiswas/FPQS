<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php 
include ("nav.php"); 
?>
<div class="homepage">
    <!-- <div class="logos"><img src="logo.png" alt="logo"></div> -->
<marquee behavior="" direction="rightnav">There is no single best way to trade. There is, however, a best way for you to trade.</marquee>
<marquee behavior="" direction="right">Foods are the essential one for human if they eat because of farmers.</marquee>

<div class="farmer">
    <br><br><br><center><h1><u><b>FARMERS PRICE QUERY SYSTEM</b></u></h1></center> 
  </div>
<div>
    <br><br> 
 
 


<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "fatik";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM register";
if( isset($_GET['search']) ){
    $comm = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $country = mysqli_real_escape_string($con, htmlspecialchars($_GET['country']));
    $state = mysqli_real_escape_string($con, htmlspecialchars($_GET['state']));
    $sql = "SELECT * FROM register WHERE comm ='$comm' AND country ='$country' AND state ='$state'";
}
$result = $con->query($sql);
?>



<div class="container">
<label>Search price for different product</label>
<form action="" method="GET">
<input type="text" placeholder="Commodity name" name="search">&nbsp;
<select name="country">
    <option value="no country">select your Country</option>
     <option value="India">India</option>
</select>&nbsp;
<select name="state">
<option value="no state">select your state</option>
     <option value="Andhra Pradesh">Andhra Pradesh</option>
     <option value="Arunachal pradesh">Arunachal pradesh</option>
     <option value="Assam">Assam</option>
     <option value="Bihar">Bihar</option>
     <option value="chhattiasgarh">chhattisgarh</option>
     <option value="Goa">Goa</option>
     <option value="Gujarat">Gujarat</option>
     <option value="Haryana">Haryana</option>
     <option value="Himachal Pradesh">Himachal Pradesh</option>
     <option value="Jharkhand">Jharkhand</option>
     <option value="Karnataka">Karnataka</option>
     <option value="Kerala">Kerala</option>
     <option value="Madhya Pradesh">Madhya Pradesh</option>
     <option value="maharastra">Maharastra</option>
     <option value="manipur">Manipur</option>
     <option value="Megalaya">Megalaya</option>
     <option value="mizoram">Mizoram</option>  
     <option value="Nagaland">Nagaland</option>
     <option value="Odisha">Odisha</option>                     
     <option value="punjab">Punjab</option>
     <option value="Rajastan">Rajastan</option>
     <option value="Sikkim">Sikkim</option>
     <option value="Tamil Nadu">Tamil Nadu</option>
     <option value="Telangana">Telangana</option>
     <option value="Tripura">Tripura</option>
     <option value="Uttar Pradesh">Uttar Pradesh</option>
     <option value="Uttarakhand">Uttarakhand</option>
     <option value="West Bengal">West Bengal</option> 
</select>&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>List of students</h2>
<table class="table table-striped table-responsive">
<tr>
<th>SL No.</th>
<th>Commodity Name</th>
<th>Price/kg</th>
<th>Buyer Name</th>
<th>Country</th>
<th>Buyer Address</th>
<th>Contact Buyer</th>
</tr>    </div>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['sl_no']; ?></td>

    


    <td><?php echo $row['comm']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['first_name']; ?></td>
    <td><?php echo $row['country']; ?></td>
    <td><?php echo $row['state']; ?></td>
    <td><a href="contact_Buyer.php" <button>Contact Buyer</button></a></td>
    </tr>
    <?php
}
?>
</table>
</div>
<br><br> <br><br> <br><br> 







    <footer class="foter">
        <p>copyright &copy;2027 www.iCommerce.com-All rights reserved</p>
        <div class="admin"><a href="#"><button class="admin2"><b>ADMIN</b></button></a></div>
    </footer>
</body>
</html>