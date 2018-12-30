<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from bookmark where website_id='$id'");
	header('location:index.php');

?>
