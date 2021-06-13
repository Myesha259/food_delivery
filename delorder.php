<?php
require "includes/db_connect.inc.php";
$o_id=$_GET['o_id'];
$deletequery="delete from orders where o_id=$o_id";
$query = mysqli_query($conn, $deletequery);
?>