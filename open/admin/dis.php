<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="registerform.php" class="text-light">Add Product</a>
        </button>
        <table class="table">
        <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>  
      <th scope="col">decsription</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include "conn.php";
      $sql="SELECT * FROM  product";
      $res = mysqli_query($conn,$sql);
      if($res){
          while($row = mysqli_fetch_assoc($res)){






            echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
			      echo '<td>'.$row['name'].'</td>';
		      	echo '<td>'.$row['description'].'</td>';
		      	echo '<td>'.$row['price'].'</td>';
            echo '<td> 
             "<img src= <?=../admin/upload/'.$row['image'];?> '" width="100px" height="100px">"  ></td>';
            echo '<td>
           <button class="btn btn-primary"><a href="edit.php?id=$row[id]" class="text-light">Edit</a></button>
           <button class="btn btn-danger"><a href="delete.php?id=$row[id]" class="text-light">Delete</a></button>
           <button class="btn btn-primary"><a href="Update.php?id=$row[id]" class="text-light">Update</a></button>
           </td>';
           echo'</tr>';
          
      }
    }
?>
  </tbody>
</table>
  </div>
</body>
</html>