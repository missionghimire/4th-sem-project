<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .b{
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 0px 0;
    border-radius: 30px;
    transition: background 0.5s;

    
}
.b:hover{
    background:#563434;
}
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <!-- <div class="col-md-7"> -->

                <div class="card mt-5">
                    <!-- <div class="card-header text-center">
                        <h4>How to Fetch Data by ID in Textbox using PHP MySQL</h4>
                    </div> -->
                    <div class="card-body">

                        <!-- <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="product_name" value="<?php if(isset($_GET['product_name'])){echo $_GET['product_name'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form> -->

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                /*$con = mysqli_connect("localhost","root","","database_name");*/
                                include "conn.php";

                                if(isset($_GET['product_name']))
                                {
                                    $product_name = $_GET['product_name'];

                                    $sql = "SELECT * FROM product WHERE product_name='$product_name' ";
                                    $res = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($res) > 0)
                                    {
                                        foreach($res as $row)
                                        {
                                            ?>

                                            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                                                <div class="card-deck">
                                                  <div class="card p-2 border-secondary mb-2">

                                                   <?php echo '<img src="admin/upload/'.$row['product_image']. '" class="card-img-top"width="200px" height="200px"'  ?>>
                                                   <div class="card-body p-1">
                                                      <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
                                                      <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

                                                  </div>
                                                  <div class="rating text-center">

                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star" ></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="card-footer p-1">
                                                  <form action="" class="form-submit">
                                                    <div class="row p-2">
                                                      <div class="col-md-6 py-1 pl-4">
                                                        <b>Quantity : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                                                    </div>
                                                </div>
                                                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">


                                                <a href="account.php " class="b text-center fw-bold"role="button">Add to cart</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                }

                ?>

            <!-- </div> -->
        </div>

    </div>
</div>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>