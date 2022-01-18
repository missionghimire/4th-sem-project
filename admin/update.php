<?php
include "conn.php";

if(isset($_POST['update']))
    {
$id= $_GET['id'];
$product_name= $_POST['product_name'];
$product_price= $_POST['product_price'];
$product_qty= $_POST['product_qty'];
$product_image= $_POST['product_image'];
$product_code= $_POST['product_code'];
 /*$sql="update product set product_name= '$product_name',product_price=' $product_price',product_qty='$product_qty' ,product_image='$product_image',product_pcode='$product_code' where id=".$id;*/

 $sql = " update product  set product_name = '".$product_name."', product_price='".$product_price."',product_qty='".$product_qty."',product_image='".$product_image."',product_code='".$product_code."' where id='".$id."'";

 $res = mysqli_query($conn,$sql);

        if($res){

        header('location:display.php');

 }
 else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:display.php");
    }
?>