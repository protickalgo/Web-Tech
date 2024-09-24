<?php 

function con()
{
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbname="ABC";
	$conn=new mysqli($serverName,$userName,$password,$dbname);
	return $conn;
}

?>