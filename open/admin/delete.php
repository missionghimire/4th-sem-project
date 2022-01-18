<?php

include 'conn.php';

$id = $_GET['id'];

$sql = " DELETE FROM `product` WHERE id = $id ";

mysqli_query($conn, $sql);

header('location:display.php');

?>
