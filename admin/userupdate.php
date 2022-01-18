<?php
include "conn.php";

if(isset($_POST['update']))
    {
$id= $_GET['id'];
 $name= $row['name'];
    $email= $row['email'];
    $password= $row['password'];
 /*$sql="update product set product_name= '$product_name',product_price=' $product_price',product_qty='$product_qty' ,product_image='$product_image',product_pcode='$product_code' where id=".$id;*/

 $sql = " update login  set name = '".$name."', email='".$email."',password='".$password."' where id='".$id."'";

 $res = mysqli_query($conn,$sql);

        if($res){

        header('location:displayuser.php');

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