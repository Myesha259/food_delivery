<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
	<link type="text/css" rel="stylesheet"  href="Signup.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name= $_POST['name'];
	$email= $_POST['email']; 
	$o_id=$_POST['o_id'];
	$password= $_POST['password'];  
	$phone= $_POST['phone'];  
	   
 


	$sql = "INSERT INTO `users` (`name`, `id`,  `email`, `phone`, `password`) VALUES ('$name', '$o_id','$email','$phone',  ,'$password',)";

	// set parameters and execute
	if(!mysqli_query($conn,$sql))
	{
		echo "New records created successfully";
	}

	$conn->close();
}	
?>	

<body>

	<div class="main"> 
		<nav>
			<img src="logo.png"width="150"hieght="150">
			<UL>
				<li><a href="">Sign Up</a></li>
				<li><a href="">Analysis</a></li>
				<li><a href="">User Name</a></li>
			</UL>
		</nav>
	</div>
	<div class="body">
		<div class="signup">
			<div>
				<br>
				<p class="Header">Sign Up</p>
				<br>
				Name<br>
				<form action="SignUp.php" method="post"><input type="text" name="name" class="input" required >
				<br>
				Organization ID <br>
				<input type="text" name="o_id" class="input" required ><br>
				<br>Email
				<input type="email" name="email" class="input" required ><br>
				<br>Phone Number
				<input type="Number" name="phone" class="input" required ><br>
				
					</select><span id="error"></span><br>
				<br>Password
				<input type="Password" name="password" class="input" required ><br>
				
				<p>		
				<button type="submit" value="insert">Submit</button>
				</form>
			</div>
		</div>
	</div>	
</body>
</html>