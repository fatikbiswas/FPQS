<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer_profile</title>
</head>
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

<!-- 

   
    <!-- <?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "fatik";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
?>
    <h2>List of Interested Farmers</h2>
<table class="table table-striped table-responsive">
<tr>
<th>SL No.</th>
<th>Farmer's Name</th>
<th>District Name</th>
<th>Post Office</th>
<th>Pin Code</th>
<th>Phone Number</th>

</tr>    </div>
<?php
$sql = "SELECT sl_no, name, district, post, pin, phone FROM contact_buyer";
$result = $con->query($sql);
while($row = $result->fetch_assoc())
{
    ?>
    <tr>
    <td><?php echo $row['sl_no']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['district']; ?></td>
    <td><?php echo $row['post']; ?></td>
    <td><?php echo $row['pin']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    
    </tr>
    <?php
}
?>
</table>
 -->




<!-- <?php
$con=mysqli_connect("localhost","root","","fatik");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM contact_buyer");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>



</body>
</html> -->


<?php 
$username = "root"; 
$password = ""; 
$database = "fatik"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM contact_buyer";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["sl_no"];
        $field2name = $row["name"];
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>



ghfhhgjhg -->

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
$sql = "SELECT * FROM contact_buyer ORDER BY sl_no ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Contact Buyer</title>
<body>
        <h1>Farmer Details</h1>
        <table>
            <tr>
                <th>SL NO</th>
                <th>FARMER NAME</th>
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['sl_no'];?></td>
                <td><?php echo $rows['name'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
</body>
</html>

</body>
</html>