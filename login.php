<?php 
session_start();
include "conn.php";

$email= $_POST["email"];
$password= $_POST["password"];
$sql="SELECT email FROM login WHERE email='".$email."' and password = '".$password."'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)==1) {
	$_SESSION["email"]=$email;
	echo $_SESSION["email"];
	header('location: home.php');
}
	else{
		header('location: account.php?acc=true');

	}
	
?>	
