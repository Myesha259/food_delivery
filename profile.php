<?php 		
session_start();
if(!isset($_SESSION['email'])){
	echo "<script>alert('You are not logged in');</script>";
	header("Location:login.php");			
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Food Delivery System</title>
	<link type="text/css" rel="stylesheet"  href="profile.css">
</head>

<body>
	<div class="main"> 
		<nav>
			<img src="banner_1.jpg"width="150"hieght="150">
			<UL>
				<li><a href="welcome.php">Home</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="about.php">About</a></li>
				<?php 
					
					if(isset($_SESSION['email'])){
						
						echo "<li><a href=".'"profile.php">'. $_SESSION['name']."</a></li>
							<li><a href=".'"logout.php">Log Out'."</a></li>
						</UL>";
	
						
					}
					else{
					echo "<li><a href=".'"login.php">Login'."</a></li>
						</UL>";

					 	
					}
				?>
		</nav>
	</div>
	<div class="body">
		<div class="profile">
			<div class="header">
				Informations
			</div>
			<div class="category">
				<p>Name:</p>
				<p>ID:</p>
				
				<p>Email:</p>
				<p>Phone Number:</p>
				
			</div>
			<div class="information">
				<p><?php echo $_SESSION['memberdetails']['name'];?></p>
				<p><?php echo $_SESSION['memberdetails']['id'];?></p>
				
				<p><?php echo $_SESSION['memberdetails']['email'];?></p>
				<p><?php echo $_SESSION['memberdetails']['phone'];?></p>
				
			</div>
		</div>
			<div class="info">
				<div class="header">Purchase History</div>
				
		<?php 
				$m_id=$_SESSION['memberdetails']['m_id'];
				$query = "SELECT o_id,date FROM `orders` WHERE m_id=$m_id";
				$result=mysqli_query($conn,$query);
				$count1=1;	
				
				
				while($orders=mysqli_fetch_assoc($result))
				{	
					$o_id=$orders['o_id'];
					$date=$orders['date'];
					$query = "SELECT products.name, orderproduct.quantity, orderproduct.total FROM orderproduct INNER JOIN products ON orderproduct.p_id=products.p_id WHERE o_id =4";
					$result2=mysqli_query($conn,$query);
					echo "order no.".$count1++;
					$count2=0;
					while($product=mysqli_fetch_assoc($result2)){

						$count2++;
				?>
					<div class="order">			
					<div>
						<p class="bold"><?php echo $count2.". ". $product['name']; ?></p>
					</div>
					<div>
						<p>Quantity: <?php echo $product['quantity']; ?></p>
					</div>
					<div>
						<p>Price: <?php echo $product['total']; ?></p>
					</div>
					<div>
						<p>Date: <?php echo $orders['date'];?></p>
					</div>
									
					</div>		
					
					<?php
				}
			}?>
			</div>


		
</body>
</html>