<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<body>
<div class="main-div">
	<h1>List of food items</h1>
	<
	<div class="center-div">
		
	    <table border="1px;">
		    <thead>
		    	<th>product_id</th>
			    <th>name</th>
			    <th>price</th>
			    <th>categories</th>
			    <th>images</th>
			    <th>available</th>
			    <th>quantity</th>
			    
			    <th colspan="2">Operation</th>	
		    </thead>
		    <tbody>
	<?php
	require "includes/db_connect.inc.php";

	$selectquery= "select * from products";
	$query= mysqli_query($conn, $selectquery);
	$result=mysqli_fetch_assoc($query);
	while($result=mysqli_fetch_assoc($query)){


	?>
	            <tr>
	            	<td><?php echo $result['p_id']; ?></td>
				    <td><?php echo $result['name']; ?></td>
				    <td><?php echo $result['price']; ?></td>
				    <td><?php echo $result['categories']; ?></td>
				    <td><?php echo $result['images']; ?></td>
				    <td><?php echo $result['available']; ?></td>
				    <td><?php echo $result['quantity']; ?></td>
				    <td><a href="delproduct.php?p_id=<?php echo $result['p_id'];?>">delete</a></td>
	            </tr>
	<?php
        }
    ?>
		    </tbody>
	    </table>
	</div>

</div>
</body>
</html>