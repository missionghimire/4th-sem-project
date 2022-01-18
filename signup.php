<?php 
/*include 'conn.php';
if (isset($_POST['done'])) {
    $name = $_POST['name'];
    $name = trim($name);
    $name = ucwords($name);
    $email = $_POST['email'];
    $email = trim($email);
    $password = $_POST['password'];
    $password = trim($password);
   //$check_name = preg_match('/^[A-Za-z ]*$/', $name);
    $check_name = preg_match('/^[A-Za-z 0-9]*$/',$name );
    $length = strlen($password);

        if (!$check_name ) {
            echo '<script type="text/javascript"> alert("NOT A VALID NAME")              
              </script>';
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script type="text/javascript"> alert("NOT A VALID EMAIL")              
              </script>';
              

        } else if ($length < 8){
            echo '<script type="text/javascript"> alert("NOT A VALID PASSWORD (AT LEAST 8 CHARACTER)")              
              </script>';
        }
else{
$sql = "INSERT into login(name,email,password) VALUES('$name','$email','$password')";
        $res = mysqli_query($conn,$sql);
        if(!$res){
            die("error".mysqli_error($conn));
        }else{
           header('location: account.php');
            //echo " resgister suceessful";
    
     
        }
  }  
}*/


session_start();
include "conn.php";
if (isset($_POST["done"])) {

    
    $name = $_POST["name"];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $cname = "/^[a-zA-Z0-9 ]+$/";
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    


    //else{

if(empty($name)  || empty($email) || empty($password)){
        
        echo "

            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>PLease Fill all fields..!</b>
            </div>
        ";
        exit();
    } else {
        if(!preg_match($cname,$name)){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
                <b>this $name is not valid..!</b>
            </div>
        ";
        exit();
    }

    
    if(!preg_match($emailValidation,$email)){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
                <b>this $email is not valid..!</b>
            </div>
        ";
        exit();
    }
    if(strlen($password) < 9 ){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
                <b>Password is weak</b>
            </div>
        ";
        exit();
    }
    if($password==$name){
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
                <b>password and user name are same</b>
            </div>
        ";
        exit();
    }
    //existing email address in our database
    $sql = "SELECT * FROM login WHERE email = '$email' ";
    $res = mysqli_query($conn,$sql);
    $count_email = mysqli_num_rows($res);
    if($count_email > 0){
        echo "
            <div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Email Address is already available Try Another email address</b>
            </div>
        ";
        exit();
    } 
    else {
        
        $sql = "INSERT INTO login(id,name,email,password) 
        VALUES (NULL,'$name','$email','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "register_success";
            echo "<script> location.href='account.php'; </script>";
            exit;
        }
    }
    }
    
    
}



?>























































?>