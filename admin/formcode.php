<?php
include("conn.php") ;


if (isset($_POST['submit']));
{
	$product_name= $_POST["product_name"];
$product_price= $_POST["product_price"];
$product_qty= $_POST["product_qty"];
$product_image= $_FILES["product_image"] ["name"];
$product_code= $_POST["product_code"];
	
	
$sql = "INSERT into product(product_name,product_price,product_qty,product_image,product_code) VALUES('$product_name','$product_price','$product_qty','$product_image','$product_code')";

 $res = mysqli_query($conn,$sql);
 move_uploaded_file($_FILES["product_image"]["tmp_name"],"upload/".$_FILES["product_image"]["name"]);
 if(!$res){
 	
 	die("error".mysqli_error($conn));
 }
 else{
header('location: display.php');
 }
}


 ?>
