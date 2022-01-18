<?php
session_start();
if(isset($_SESSION["name"])){
	header('location: display.php');
}

else{
	
	header('location: account.php?err=true');
}
?>