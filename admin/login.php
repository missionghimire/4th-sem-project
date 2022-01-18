<?php 
session_start();
include "conn.php";

$name= $_POST["name"];
$password= $_POST["password"];
$sql="SELECT name FROM admin WHERE name='".$name."' and password = '".$password."'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)==1) {
	$_SESSION["name"]=$name;
	echo $_SESSION["name"];
	header('location: home.php');
}
	else{
		header('location: adminlogin.php?log=true');

	}
	
?>	
