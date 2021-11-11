<?php
/* ini koneksi ke database */
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "a_test1";

	$connection = mysqli_connect($servername, $username, $password, $dbname);
	if(!$connection){
		die("Connection failed : ".mysqli_connect_error());
	}
?>