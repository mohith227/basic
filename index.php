<?php include 'conf.php';?>
<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js">
</script>
</head>
<body>
  <div class="heading">
    <div class="container">
      <div class="navbar">
  <a href="#home">Home</a>
  <a href="#home">New collections</a>
  <div class="dropdown">
    <button class="dropbtn">mens
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Tshirt</a>
      <a href="#">shirts</a>
      <a href="#">pants</a>
    </div>
  </div>
  <a href="#home">women</a>
  <a href="#home">kids</a>
</div>
<div class="search">
  <input type="text" placeholder="enter the item" />
  <button>ok</button>
</div>
    </div>
  </div>
  <div class="container">
<div class="nav">

                <div class="list-group">
                <h3>Colour</h3>
                <?php
                    $query = "select distinct(product_color) from product where product_status = '1'";
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    while($color_data = mysqli_fetch_assoc($rs)){

                ?>
                    <a href="javascript:void(0);" class="list-group-item">
                    <input type="checkbox" class="item_filter colour" value="<?php echo $color_data['product_color']; ?>"  >
                    &nbsp;&nbsp; <?php echo $color_data['product_color']; ?></a>
                <?php } ?>
                </div>


                <div class="list-group">
                <h3>Brand</h3>
                <?php
                    $query = "select distinct(product_brand) from product where product_status = '1'";
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    while($brand_data = mysqli_fetch_assoc($rs)){

                ?>
                    <a href="javascript:void(0);" class="list-group-item">
                    <input type="checkbox" class="item_filter brand" value="<?php echo $brand_data['product_brand']; ?>" >
                    &nbsp;&nbsp; <?php echo $brand_data['product_brand']; ?></a>
                <?php } ?>
                </div>

                <div class="list-group">
                <h3>Size</h3>
                <?php
                    $query = "select distinct(product_size) from product where product_status = '1'";
                    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());
                    while($size_data = mysqli_fetch_assoc($rs)){

                ?>
                    <a href="javascript:void(0);" class="list-group-item">
                    <input type="checkbox" class="item_filter size" value="<?php echo $size_data['product_size']; ?>"  >
                    &nbsp;&nbsp; <?php echo $size_data['product_size']; ?></a>
                <?php } ?>
                </div>
                <div class="list-group">
                <h3>price</h3>

<input type="hidden" class="price1" value="0" >
                <input type="hidden" class="price2" value="3000"  >

                <p id="priceshow"></p>
                <div id="slider-range"></div>
                </div>

</div>
    <div class="main">
      <div class="details"  >

                        <?php
                          $query = "select * from product where product_status = '1'";

                           $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());

                           while($product_data = mysqli_fetch_assoc($rs)){
                        ?>
                          <div class="productlist">
                              <div class="thumbnail">
                                  <img src="<?php echo $product_data['product_image']; ?>" alt="">
                                  <div class="caption">

                                      <p style="text-align:center";><strong><a href="#"><?php echo $product_data['product_name']; ?></a>
                                      </strong></p>
                                       <h4 style="text-align:center;" >$ <?php echo $product_data['product_price']; ?></h4>
                                      <p>Color : <?php echo $product_data['product_color']; ?> &nbsp; &nbsp; &nbsp; &nbsp;  Brand : <?php echo $product_data['product_brand']; ?> </p>

                                      <p>Size : <?php echo $product_data['product_size']; ?> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity : <?php echo $product_data['product_quantity']; ?> </p>
                                  </div>
                              </div>
                          </div>
                          <?php  } ?>
      </div>
    </div>
  </div>

</body>
</html>
