<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<body>
<div class="main-div">
	<h1>List of orders</h1>
	
	<div class="center-div">
		
	    <table border="1px;">
		    <thead>
		    	<th>order_id</th>
			    <th>m_id</th>
			    <th>date</th>
			    
			    <th colspan="2">Operation</th>	
		    </thead>
		    <tbody>
	<?php
	require "includes/db_connect.inc.php";

	$selectquery= "select * from orders";
	$query= mysqli_query($conn, $selectquery);
	$result=mysqli_fetch_assoc($query);
	while($result=mysqli_fetch_assoc($query)){


	?>
	            <tr>
	            	<td><?php echo $result['o_id']; ?></td>
				    <td><?php echo $result['m_id']; ?></td>
				    <td><?php echo $result['date']; ?></td>
				    <td><a href="delorder.php?o_id=<?php echo $result['o_id'];?>">delete</a></td>
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