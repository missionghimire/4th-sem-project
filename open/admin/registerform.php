

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
						<input type="text" id="fname" name="name">
					</div>
					
					<div class="input_wrap">
						<label for="description">Description</label>
						<textarea placeholder="Description" name="description"></textarea>
					</div>
				
				<div class="input_wrap">
					<label for="price">Price</label>
					<input type="text"  name="price">
				</div>

				<div class="input_wrap">
					<label for="image">Image</label>
					<input type="file"  name="image">
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