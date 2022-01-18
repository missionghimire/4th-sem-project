<?php
session_start();
session_unset();
session_destroy();
header('location:../account.php');
header('location: ../account.php?logout=true');

 ?>