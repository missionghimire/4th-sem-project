<?php 
//session_start();
include "conn.php";
    $name = $_POST['name'];
	$email = $_POST['email'];
	$number =$_POST['number'];
	$address = $_POST['address'];
	$username=$_POST['username'];
	$password = $_POST['password'];
	//$repassword = $_POST['repassword'];
$sql = "INSERT into user_info(name,email,number,address,username,password,repassword)VALUES('$name','$email','$number','$address',$username','$password')";
     $res = mysqli_query($conn,$sql);
     if($res){
         echo "Inserted successfully";
     }
     else{  
        die("error".mysqli_error($conn));
    }

	
?>	

