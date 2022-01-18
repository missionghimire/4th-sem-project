<?php
include "conn.php";
$name= $decsription= $price= $image= '';
$id= $_GET['id'];
$sql = "Select * from crud where name id=".$id;
$res = mysqli_query($conn,$sql);
if($res){
	while($row = mysqli_fetch_assoc($res)){
		$name= $row['name'];
		$decsription= $row['decsription'];
        $price= $row['price'];
        $image= $row['image'];
		
	}
}

?>
<form method = "post" action="update.php?id=<?php echo $id ?>">
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete = "off" value='<?php echo $name;?>'>
  </div>
  <div class="mb-3">
    <label >decsription</label>
    <input type="decsription" class="form-control" name="decsription" placeholder="Enter your decsription" autocomplete = "off" value='<?php echo $decsription;?>'>
  </div>
  <div class="mb-3">
    <label >price</label>
    <input type="number" class="form-control" name="price" placeholder="Enter your price number" autocomplete = "off" value='<?php echo $price;?>'>
  </div>
  <div class="mb-3">
    <label >image</label>
    <input type="file" class="form-control" name="image" placeholder="Enter your image" autocomplete = "off" value='<?php echo $image;?>'>
  </div>
  <button type="submit" class="btn btn-primary" name = "submit" value="update">Submit</button>
    <button type="cancel" class="btn btn-primary" name = "cancel" value="update">Cancel</button>
  
</form> 
 



