<?php
$ser = "localhost";
$user = "root";
$pwd = "";
$db = "1stproject";
$conn = mysqli_connect($ser,$user,$pwd,$db);
if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
/*else{
    echo "connected";
}*/
 	
 
?>