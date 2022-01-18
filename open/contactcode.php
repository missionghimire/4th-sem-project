<?php 
include 'conn.php';
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];


$sql = "INSERT into contact(name,email,phone,message) VALUES('$name','$email','$phone','$message')";

 $res = mysqli_query($conn,$sql);
 if(!$res){
 	die("error".mysqli_error($conn));
 }else{
header('location: index1.php');
 }
 











 ?>