<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $name = $_POST['name'];
 $description = $_POST['description'];
 $price= $_POST['price'];
 $image= $_POST['image'];
 $sql = " update product set id=$id, name='$name', description='$description',price='$price',image='$image' where id=$id  ";

 $res = mysqli_query($conn,$sql);

 header('location:display.php');
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
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> name: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> description: </label>
 <input type="description" name="description" class="form-control"> <br>

 <label> price: </label>
 <input type="number" name="price" class="form-control"> <br>
 <label> image: </label>
 <input type="file" name="image" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>