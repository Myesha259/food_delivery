<!DOCTYPE html>
<html>
<head>
	<title>online food delivery system</title>
	<link type="text/css" rel="stylesheet"  href="about.css">
</head>

<body>
	<div class="main"> 
		<nav>
			<img src="banner_1.jpg"width="250"hieght="250">
			<UL>
				<li><a href="welcome.php">Home</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="about.php">About</a></li>
				<?php 
					session_start();
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
	<div>
		<img src="bg1.jpg" height="300px" width="100%">
	</div>
	<div class="about">
		<h1>About</h1>
		In our site, you can visit and enjoy some delicious food. We serve the best food. Come enjoy the time. 
		Online Food Delivery System is one of the fastest growing marketing strategy for most of the Business people, in away to gain the more profits.
		As we all know that the food is the basic need in every human life, for which he/she is struggling. 
		But even after their struggles, if people are still not happy with their sustenance, then the effort given behind it is useless.
		The reasons might be the people are busy with their schedules, they either can’t able to cook in right time or not having time to go and order their food from outside.
		Do you want to freeze up your starving…? 
		Then here is the way, where Spicy and Delicious Restaurants and other food stuff points have now started to deliver their food through the Apps as.
		Upon which, people can stop starving and could start to eat healthier food, just by clicking on the menus served on the apps. 
		There are many more benefits offered by the Takeaway Food Delivery system.

	</div>
</body>
</html>