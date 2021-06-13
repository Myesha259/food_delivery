<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<body>
<div class="main-div">
	<h1>List of order product</h1>
	
	<div class="center-div">
		
	    <table border="1px;">
		    <thead>
		    	<th>orderproduct_id</th>
			    <th>order_id</th>
			    <th>product_id</th>
			    <th>quantity</th>
			    <th>total</th>
			    
			    <th colspan="2">Operation</th>	
		    </thead>
		    <tbody>
	<?php
	require "includes/db_connect.inc.php";

	$selectquery= "select * from orderproduct";
	$query= mysqli_query($conn, $selectquery);
	$result=mysqli_fetch_assoc($query);
	while($result=mysqli_fetch_assoc($query)){


	?>
	            <tr>
	            	<td><?php echo $result['op_id']; ?></td>
				    <td><?php echo $result['o_id']; ?></td>
				    <td><?php echo $result['p_id']; ?></td>
				    <td><?php echo $result['quantity']; ?></td>
				    <td><?php echo $result['total']; ?></td>
				    
				    <td><a href="delete.php?op_id=<?php echo $result['op_id'];?>">delete</a></td>
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