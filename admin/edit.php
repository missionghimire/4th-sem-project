<?php
include "conn.php";

/*$product_name=$product_price=  $product_qty =$product_image= $product_code='';*/
$id= $_GET['id'];
$sql = "Select * from product where id='".$id."'";
$res = mysqli_query($conn,$sql);
//if($res){
	while($row = mysqli_fetch_assoc($res)){
		$product_name= $row['product_name'];
		$product_price= $row['product_price'];
		$product_qty= $row['product_qty'];
    $product_image= $row['product_image'];
    $product_code= $row['product_code'];
	}
//}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">

   <form method = "post" action="update.php?id=<?php echo $id ?>">

     <br><br><div class="card">

       <div class="card-header bg-dark">
         <h1 class="text-white text-center">  Update Operation </h1>
       </div><br>
         <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" name="product_name" placeholder="Enter your name" autocomplete = "off" value='<?php echo $product_name; ?>'>
  </div>
  
  <div class="mb-3">
    <label >Price</label>
    <input type="number" class="form-control" name="product_price" placeholder="Enter your price number" autocomplete = "off"value='<?php echo $product_price; ?>'>
  </div>

<div class="mb-3">
    <label >Quantity</label>
    <input type="description" class="form-control" name="product_qty" placeholder="Enter your quantity" autocomplete = "off" value='<?php echo $product_qty; ?>'>
  </div>


  <div class="mb-3">
    <label >image</label>
    <input type="file" class="form-control" name="product_image" placeholder="Enter your image" autocomplete = "off" value='<?php echo $image; ?>'>
  </div>

  <div class="mb-3">
    <label >Code</label>
    <input type="description" class="form-control" name="product_code" placeholder="Enter your code" autocomplete = "off" value='<?php echo $product_code; ?>'>
  </div>
  <button type="submit" class="btn btn-primary" name = "update">Update</button>
       </div>
     </form>
   </div>



    
 </body>
 </html> 

