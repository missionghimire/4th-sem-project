<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
  <button class="btn btn-primary my-5"> <a href="registerform.php" class="text-light">Add Product</a>
        </button>
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
      <th scope="col">Id</th>
      <th scope="col">Name</th>  
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
 </tr>

 <?php

 include 'conn.php'; 
 $sql = "select * from product";

 $res = mysqli_query($conn,$sql);

 while($row = mysqli_fetch_assoc($res)){
 ?>
 <tr class="text-center">
 <td> <?php echo $row['id'];  ?> </td>
 <td> <?php echo $row['name'];  ?> </td>
 <td> <?php echo $row['description'];  ?> </td> 
 <td> <?php echo $row['price'];  ?> </td> 
 <td><?php echo '<img src="upload/'.$row['image']. '" width="100px" height="100px"'  ?>>
 
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-white"> Delete </a>  </button> 
 <button class="btn-primary btn"> <a href="update.php?id=<?php echo $row['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>
