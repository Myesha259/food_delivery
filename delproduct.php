<?php
require "includes/db_connect.inc.php";
$p_id=$_GET['p_id'];
$deletequery="delete from product where p_id=$p_id";
$query = mysqli_query($conn, $deletequery);
?>