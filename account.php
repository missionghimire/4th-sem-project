<?php
if(isset($_GET['logout']))
	//echo  "You are logout";
	echo'<script type="text/javascript"> 
    alert("You are logout")
    </script>'

 ?>
 <?php
if(isset($_GET['acc']))
    //echo  "incorrect password";
    echo'<script type="text/javascript"> 
    alert("Incorrect Password")
    </script>'
    	
 



/*include 'conn.php';
if (isset($_POST['done'])) {
$name = $_POST['name'];
$name = trim($name);
$name = ucwords($name);
$email = $_POST['email'];
$email = trim($email);
$password = $_POST['password'];
$password = trim($password);

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
    else if($password=$name){
    	 echo '<script type="text/javascript"> alert("password and user name are same")              
          </script>';
    }
    //existing email address in our database
$sql = "SELECT id FROM login WHERE email = '$email' LIMIT 1" ;
$result = mysqli_query($conn,$sql);

if($result){
$count_email =mysqli_num_rows($result);   //count num rows in database 
if($count_email>0){
	echo '<script type="text/javascript"> alert("Email Address is already available Try Another email address")              
          </script>';	
}

else{
$sql = "INSERT into login(name,email,password) VALUES('$name','$email','$password')";
    $res = mysqli_query($conn,$sql);
    if(!$res){
        die("error".mysqli_error($conn));
    }else{
       header('location: account.php');
        echo "suceessful";
    }
}  
}*/
//}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"> <!---for small screen like mobl--->
	<title>nepali bajar</title><link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700&family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>

<div class="container">
	<div class="a">
<div class="logo">
	<img src="image/logo.png" width="180px">
</div>
<nav>
	<ul id="MemuIteams">
		<li><a href="index.php">Home</a></li>
		<li><a href="product.php">Products</a></li>
		<li><a href="">About</a></li>
		<li><a href="">Contact</a></li>
		<li><a href="">Account</a></li>

	</ul>
</nav>
<a href="cart.html">
<img src="image/cart.png" width="30px" height="30px">
</a>
<img src="image/m.png" class="memu" onclick="menutoggle()">
</div>
	
</div>
<!---account--->
<div class="account">
	<div class="container">
		<div class="row">
			<div class="c2">
				<img src="image/unnamed.png" width="100%">
			</div>
			<div class="c2">
				<div class="fc"> 
					<div class="fb">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="indicator">
					</div>
					<form id="loginform" method="post" action="login.php">
						<input type="email" placeholder="E-mail" name="email">
						<input type="password" placeholder="password" name="password">
						<button type="submit" class="b">Login</button>
						<a href="">Forgot password</a><br>
						<a href="admin/adminlogin.php">Admin Login </a>
					</form>
					<form id="regform" method="post" action="signup.php">
						<input type="text" placeholder="Username" name="name">
						<input type="email" placeholder="E-mail" name="email">
						<input type="password" placeholder="password" name="password">
						<button type="submit" class="b" name="done">Register</button>
					</form>
					
				 </div> 
			</div>
		</div>
	</div>
</div>



	<!--footer-->
	<div class="f">
		<div class="container">
			<div class="row">
				<div class="fc1">
					<h3>Download our App</h3>
					<p>Download App for Andriod and iso mobile phone.</p>
					<div class="flogo">
						<img src="image/pstore.png">
						<img src="image/astore.png">
					</div>
				</div>
				<div class="fc2">
					<img src="image/logo.png">
					<p>Our Purpose Is To Sustainably Make the pleasure </p>
				</div>
				<div class="fc3">
					<h3>Useful Link</h3>
					<ul>
						<li>Privacy Policy</li>
						<li>Term of use</li>
						<li>Return policy</li>
						<li>Discount Coupons</li>
					</ul>
					
				</div>
				<div class="fc4">
					<h3>Follow US</h3>
					<ul>
						<li>Facebook</li>
						<li>Instagram</li>
						<li>Twitter</li>
						<li>YouTube</li>
					</ul>
					
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2020--Nepali Bajar </p>
		</div>
	</div>

	<!---js for toggle memu--->
	<script>
		var	MemuIteams=document.getElementById("MemuIteams");
		MemuIteams.style.maxHeight="0px";
		function menutoggle(){
			if (MemuIteams.style.maxHeight=="0px") {
				MemuIteams.style.maxHeight="200px"
			}
			else{
				MemuIteams.style.maxHeight="0px"
			}
		}

	</script>
	<!---js for toggle form--->
	<script >
		var loginform=document.getElementById("loginform");
		var regform=document.getElementById("regform");
		var indicator=document.getElementById("indicator");
		function register(){
			regform.style.transform="translateX(0px)";
			loginform.style.transform="translateX(0px)";
			indicator.style.transform="translateX(100px)";

		}
		function login(){
			regform.style.transform="translateX(300px)";
			loginform.style.transform="translateX(300px)";
			indicator.style.transform="translateX(0px)";
		}
	</script>
</body>
</html>