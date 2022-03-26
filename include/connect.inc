<?php
	$servername	=	"localhost";
	$username	=	"id15781172_ecommerce";
	$pass		=	"ek[e4LCAwz<!/fDO";
	$dbname		=	"id15781172_malefashion";
	$conn		=	@mysqli_connect($servername, $username, $pass, $dbname);
	if(!$conn)
		echo "Kết nối thất bại".mysqli_connect_error();
?>
