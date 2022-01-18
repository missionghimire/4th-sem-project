<?php include("header.php") ?>

<html>


<head>
	<meta charset="UTF-8">
	<title>Registration Form </title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Registration Form
		</div>

		<form method="POST" action="formcode.php" enctype="multipart/form-data">
			<div class="form_wrap">
				
					<div class="input_wrap">
						<label for="fname">Product Name</label>
						<input type="text" id="fname" name="product_name">
					</div>
					
					<div class="input_wrap">
						<label for="productprice">product price</label>
						<input type="number" id="fname" name="product_price">
					</div>
				
				<div class="input_wrap">
					<label for="productqty">product qty</label>
					<input type="text"  name="product_qty">
				</div>

				<div class="input_wrap">
					<label for="product_image">Image</label>
					<input type="file"  name="product_image">
				</div>
				<div class="input_wrap">
					<label for="product_code">pcode</label>
					<input type="text"  name="product_code">
				</div>

				
			
				
				<div class="input_wrap">
					<input type="submit" value="SUBMIT" class="submit_btn" name="submit">
				</div>
			</div>
		</form>
	</div>
</div>

</body>
</html>
<?php 
include("footer.php");
 ?>