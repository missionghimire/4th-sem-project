<?php
include "conn.php";

/*$product_name=$product_price=  $product_qty =$product_image= $product_code='';*/
$id= $_GET['id'];
$sql = "Select * from login where id='".$id."'";
$res = mysqli_query($conn,$sql);
//if($res){
  while($row = mysqli_fetch_assoc($res)){
    $name= $row['name'];
    $email= $row['email'];
    $password= $row['password'];
   
}
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

   <form method = "post" action="userupdate.php?id=<?php echo $id ?>">

     <br><br><div class="card">

       <div class="card-header bg-dark">
         <h1 class="text-white text-center">  Update Operation </h1>
       </div><br>
         <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete = "off" value='<?php echo $name; ?>'>
  </div>
  
  <div class="mb-3">
    <label >email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete = "off"value='<?php echo $email; ?>'>
  </div>

<div class="mb-3">
    <label >password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete = "off" value='<?php echo $password; ?>'>
  </div>


 
  <button type="submit" class="btn btn-primary" name = "update">Update</button>
       </div>
     </form>
   </div>



    
 </body>
 </html>