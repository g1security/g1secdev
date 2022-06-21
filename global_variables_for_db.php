<?php
$ip_server = getHostByName(getHostName());

$servername = "217.21.74.1";
$username = "u526019148_pi";
$password = "g1secThesis!";
$database = "u526019148_g1securty";
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

?>
