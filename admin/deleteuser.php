<?php

include 'conn.php';

$id = $_GET['id'];

$sql = " DELETE FROM `login` WHERE id = $id ";

mysqli_query($conn, $sql);

header('location:displayuser.php');

?>
