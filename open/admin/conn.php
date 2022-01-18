<?php
$server= 'localhost';
$user= 'root';
$pwd= '';
$db='finalproject';
$conn = mysqli_connect($server,$user,$pwd,$db);
if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
 
 
?>