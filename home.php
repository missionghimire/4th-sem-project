<?php
session_start();
if(isset($_SESSION["email"])){
	header('location: open/index1.php?err=true');
}

else{
	
	header('location: account.php?err=true');
}
?>