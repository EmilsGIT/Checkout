<?php
	$conn = new mysqli("localhost","root","","cart_system");
	if($conn->connect_error){
		die("You Died.".$conn->connect_error);
	}
?>





