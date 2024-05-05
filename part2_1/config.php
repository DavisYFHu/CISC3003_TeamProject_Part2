<?php
	$conn = new mysqli("127.0.0.1","root","010612","cart_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>