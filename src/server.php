<?php
	
	function connect($db,$qr)
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$con = mysqli_connect("localhost", "root", "" ) 
		or die("Can not connect");
		mysqli_select_db($con, $db) 
		or die("Can not select database");
		
		$result = mysqli_query( $con,$qr ) 
		or die("Can not execute query");
		return $result;
		
	}
	
	
	
	
	
?>