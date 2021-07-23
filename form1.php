<?php

$servername='localhost';

$username='root';

$password='';

$dbname = "door";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){

die('Could not Connect My Sql:' .mysql_error());

}

?>





<!DOCTYPE html>
<html>
<head>
	<title>JOIN US</title>
	<style type="text/css">
		h1{
			color: black;
			font-size: 40px;
		}
		fieldset{
			border-style: solid;
			border-color: black;
			background: url(images/donatee.jpg) rgba(-2.0, -0.5, -0.5, -1.0);
			height: 100%;
			width: 600px;
			background-position: center;
			position: relative;
			padding: 20px;
			background-size: cover;
			color: black;
			justify-content: space-around;
		}
		table{
			line-height:25px ;
		}
	</style>
</head>
<body>

<div>

<?php

if(isset($_POST['submit']))

{

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$email = $_POST['email'];

$mob = $_POST['mob'];

$address = $_POST['address'];


$Sql = "INSERT INTO user(fname,lname,email,mob,address)

VALUES ('$fname','$lname','$email','$mob','$address')";

if (mysqli_query($conn, $Sql)) {

echo "Registered successfully !";

} else {

echo "Error: " . $Sql . " " . mysqli_error($conn);

}

mysqli_close($conn);

}

?>


</div>






	<center>
<form action="form1.php" method="post">
	<h1>Join Us By Registering</h1>
	<fieldset>
		<table>
			<tr>
				<td>
					First name</td>
					<td> 
						<input type="text" name="fname" placeholder="Bhavesh" required><br></td>
			</tr>
			<tr>
				<td>
					Last name</td>
					<td>
						<input type="text" name="lname" placeholder="joshi" required><br></td>
			</tr>
		<tr>
			<td>Email Id</td><td><input type="email" name="email" placeholder="doordonation@gmail.com" required><br></td></tr>
		<tr><td>Mobile Number</td><td><input type="Number" name="mob" placeholder="9082xxxxxx" required><br></td></tr>
		<tr>
		<td>Choose</td><td><input type="checkbox" name="" value="Donor">Donor
		<input type="checkbox" name="t_name" value="receiver">Receiver</td><br></tr>

		<tr><td>Address</td><td><textarea rows="5" cols="50" name="address"required>
			
		</textarea><br></td></tr>
		<tr><td>City</td><td><input type="text" name="city" placeholder="mumbai"required><br></td></tr>
		<tr><td>Pin</td><td><input type="Number" name="pin" placeholder="401105"required><br></td></tr>
		<tr><td>State</td><td><input type="text" name="state" placeholder="maharashtra"required><br></td></tr>
		<tr><td>Country</td><td><input type="text" name="country" placeholder="India"required><br></td></tr>
		<tr><td>What you want to </td><td><input type="checkbox" name="medicine">Donate Medicine<br>
		<input type="checkbox" name="fooditems"> Donate Food items<br> 
		<input type="checkbox" name="fundraising">Fundraising<br>
		<input type="checkbox" name="fund">Fund Us<br>
		
		<tr><td>MEDICINE</td><td><input type="checkbox" name="Tablets">Tablets <br>
		<input type="checkbox" name="Bottle">Bottle<br>
		<input type="checkbox" name="equipments">medical equipments<br>
		<input type="checkbox" name="fundraising1">Fundraising for medicine<br>
		<input type="checkbox" name="fund1">Fund for medicine<br>
		</td></tr>
		<tr><td>Food Items</td><td><input type="checkbox" name="packedfood">Packed Food Items<br>
		<input type="checkbox" name="ration">Ration Items<br>
		<input type="checkbox" name="veg">Vegetables<br>
		<input type="checkbox" name="meal">Meal<br>
		<input type="checkbox" name="fundraising2">Fundraising for Food <br>
		<input type="checkbox" name="fund2">Fund for Food<br>
		</td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="Submit">
		<input type="reset" name="reset" value="Reset"><br></td></tr>


</table>

	</fieldset>

</form>
</center>
</body>
</html>