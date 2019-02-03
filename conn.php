<?php

//MySQLi
$conn = mysqli_connect("localhost","root","","bookmarker");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE bookmark (
website_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
website_name VARCHAR(30) NOT NULL,
website_link VARCHAR(100) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "<h5 class='form-control shadow-sm text-center'><b>Database added successfully!</b></h5>";
}

//mysqli_close($conn);


?>
