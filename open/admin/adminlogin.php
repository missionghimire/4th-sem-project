<?php
if(isset($_GET['log'])){
        echo  "incorrect password";
    }
     ?>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
<body>
    <div class="loginbox">
    <img src="image/avatar.png" class="avatar">
        <h1>Admin Login Here</h1>
        <form method="post" action="login.php">
            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
            <br>
            <a href="../account.php">&#8592;Back</a>
            
        </form>
        
    </div>


</body>
</head>
</html>