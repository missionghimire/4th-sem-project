<?php
include("conn.php") ;


if (isset($_POST['submit']));
{
	$name= $_POST["name"];
$description= $_POST["description"];
$price= $_POST["price"];
$image= $_FILES["image"] ["name"];
	
	
$sql = "INSERT into product(name,description,price,image) VALUES('$name','$description','$price','$image')";

 $res = mysqli_query($conn,$sql);
 move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);
 if(!$res){
 	
 	die("error".mysqli_error($conn));
 }
 else{
header('location: display.php');
 }
}


 ?>
