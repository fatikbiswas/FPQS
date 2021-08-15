<?php 
include ("nav.php"); 
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
  <body>
  <div class="reg">
	<form method="post" action="sqlinsert2.php">
		<label class="q" for="first_name">First Name</label><br>
		<input class="states" type="text" name="first_name">
		<br><br>
		<label class="q" for="last_name">Last Name</label><br>
		<input class="states" type="text" name="last_name">
		<br><br>
       <label class="q" for="email">Email ID</label><br>
		<input class="states" type="email" name="email">
        <br><br>
        <label class="q" for="password">Password</label><br>
		<input class="passwd" type="password" name="password">
        <br><br>
        <label class="q" for="country">Select Country</label><br><select class="states" name="country">
		<option value="India">India</option>
		</select><br><br>
        <label class="q" for="state">Select State</label><br>
        <select name="state" class="states">
        <option value="default">select state</option>
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
        </select><br><br>
        
        <br><br>
		<br>
        
		<input class="subt" type="submit" name="save" value="submit" >
	</form>
    </div>
  </body>
</html>