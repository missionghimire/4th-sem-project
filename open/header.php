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
	<div class="header">
	<div class="container">
		<div class="a">
	<div class="logo">
		<img src="image/logo.png" width="180px">
	</div>
	<nav>
		<ul id="MemuIteams">
			<li><a href="index1.php">Home</a></li>
			<li><a href="product.php">Products</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul>
	</nav>
	<form action="search.php" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="product_name" value="<?php if(isset($_GET['product_name'])){echo $_GET['product_name'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

	<a href="cart.php">
	<img src="image/cart.png" width="30px" height="30px">
	</a>

	<img src="image/m.png" class="memu" onclick="menutoggle()">
	

</div>
</div>
</div>
</body>
</html>