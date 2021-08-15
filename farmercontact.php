<?php
$user = 'root';
$password = ''; 
$database = 'fatik'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, $password, $database);
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
$sql = "SELECT * FROM farmercontact ORDER BY slno ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer_profile</title>
<body>

<link rel="stylesheet" href="style.css">
    <nav class="navbar background h-nav-resp">
            <ul class="nav-list v-class-resp">
                <div class="logo"><img src="logo.png" alt="logo"></div>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#sevices">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <!-- <div class="rightnav "><input type="text" name="search" id="search">
                
                <button class="btn">search</button>
            </div> -->
            <div class="log">
                
            </div>
            <div class="logg"><a href="#"><button class="btn5"><b>PROFILE</b></button></a></div>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>

        <h1>Farmer Details</h1>
        <table>
            <tr>
                <th>SL NO</th>
                <th>FARMER NAME</th>
                <th>DISTRICT</th>
                <th>POST OFFICE</th>
                <th>PIN CODE</th>
                <th>CONTACT NO</th>
                <th>PROPOSED PRICE</th>
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['slno'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['district'];?></td>
                <td><?php echo $rows['post'];?></td>
                <td><?php echo $rows['pin'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['price'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br>

        <footer class="foter">
        <p>copyright &copy;2027 www.iCommerce.com-All rights reserved</p>
        <div class="admin"><a href="#"><button class="admin2"><b>ADMIN</b></button></a></div>
    </footer>
</body>
</html>