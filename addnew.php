<?php
	include('conn.php');

	$website_name=$_POST['website_name'];
	$website_link=$_POST['website_link'];

	mysqli_query($conn,"insert into bookmark (website_name, website_link) values ('$website_name', '$website_link')");
	header('location:index.php');

?>
