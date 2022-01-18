
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
      
      <li><a href="adminlogout.php">Logout</a></li>

    </ul>
  </nav>
<!--   <a href="cart.php">
  <img src="image/cart.png" width="30px" height="30px">
  </a> -->

  <img src="image/m.png" class="memu" onclick="menutoggle()">
  

</div>
</div>
</div>
</body>
</html>
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
  <button class=" btn btn-primary mt-3"> <a href="registerform.php" class="text-light">Add Product</a>
  </button>
  <button class=" btn btn-primary mt-3"> <a href="displayuser.php" class="text-light">user</a>
  </button>
  <div class="col-lg-12">
   <br>
   <h1 class="text-warning text-center my-0" > Display Table Data </h1>
   <table  id="tabledata" class=" table table-striped table-hover table-bordered my-5">

     <tr class="bg-dark text-white text-center">

      <th scope="col">Id</th>
      <th scope="col">Name</th>  
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Pcode</th>
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
       <td> <?php echo $row['product_name'];  ?> </td>
       <td> <?php echo $row['product_price'];  ?> </td> 
       <td> <?php echo $row['product_qty'];  ?> </td> 
       <td><?php echo '<img src="upload/'.$row['product_image']. '" width="100px" height="100px"'  ?>>
        <td> <?php echo $row['product_code'];  ?> </td> 

        <td> <button class="btn-primary btn"> <a href="edit.php?id=<?php echo $row['id']; ?>" class="text-white"> Update </a> </button> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-white"> Delete </a>  </button> 
        </td>

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
<?php
include"footer.php";
?>