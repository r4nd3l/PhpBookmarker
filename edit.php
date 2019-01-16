<?php
	include('conn.php');

	$id=$_GET['id'];

	$website_name=$_POST['website_name'];
	$website_link=$_POST['website_link'];

	mysqli_query($conn,"update bookmark set website_name='$website_name', website_link='$website_link' where website_id='$id'");
	header('location:index.php');

?>
