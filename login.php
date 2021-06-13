<?php
session_start();

if(isset($_SESSION['email'])){
	echo "<script>alert('You are alredy logged in');</script>";
	header("refresh:2;url=welcome.php");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery_system";


$conn = new mysqli($servername, $username, $password, $dbname);

$error="";
$success="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['Login']))
{		
	if($_POST['email']=="admin@gmail.com"&&$_POST['password']="pass")
	{
			$success="welcome admin";
			header("refresh:2;url=signup.php");

	}
	elseif($_POST['email']=="mirza@gmail.com" && $_POST['password']="mirza"){
		header("location: welcome.php");
	}
	else{


		$email=$_POST['email'];
		$password=$_POST['password'];
		$password=stripcslashes($password);
		$email=stripcslashes($email);

		$res = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '".$email."'");

		$num = mysqli_num_rows($res);

		if($num == 0){

		$error="Invalid Email";
		$success="";

		}
		else{

		$res = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."'");
		$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

		$num = mysqli_num_rows($res);

			if($num == 0){

			$error="Invalid Password";
			$success="";
			}
			else{
				$error="";	
				$success="Welcome ".$row['name'];
				
				$_SESSION['name']=$row['name'];
				$_SESSION['email']=$row['email'];
				$_SESSION['m_id']=$row['m_id'];
				$_SESSION['memberdetails']=$row;
				header("refresh:2;url=welcome.php");
			}
		}
	}
	
		
	
	$conn->close();
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>FOOD DELIVERY</title>
	<link type="text/css" rel="stylesheet"  href="login.css">
</head>
<script type="text/javascript"></script>
	<body>
		<div class="main"> 
			<nav>
				<img src="banner_1.jpg"width="150"hieght="150">
				<UL>
					<li><a href="welcome.php">Home</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="login.php">Log In</a></li>
				</UL>
			</nav>
		</div>
		<div class="welcome">
			<div class="panel">
				
				<p><span class="bfont">Food Delivery  <span class="cyan"></span></span></p>
				
				<form  action="" method="post">
					<p class="small id">Email</p>
					<input type="text" name="email" class="input" required>
					<p class="small id">Password</p>
					<input type="password" name="password" class="input" required><br>
					<br><center><button name="Login" style="margin-left: 0px";>Log In</button></center>
				</form>
				<p><span style='color:#e84118; font-size: 20px;'><?php echo $error; ?></span> </p>
				<p><span style='color:#44bd32; font-size: 20px;'><?php echo $success; ?></span> </p>
			</div>
		</div>
	</body>
</html>