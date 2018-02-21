<?php
include"conf.php";
$colour="";
$brand="";
$size="";
$price="";
$colour = isset($_REQUEST['colour'])?$_REQUEST['colour']:"";
$brand = isset($_REQUEST['brand'])?$_REQUEST['brand']:"";
$size = isset($_REQUEST['size'])?$_REQUEST['size']:"";
$price = isset($_REQUEST['price'])?$_REQUEST['price']:"";

         $query = "select * from product where product_status = '1'";
  //filter query start
     if(!empty($colour)){
         $colordata =implode("','",$colour);
         $query  .= " and product_color in('$colordata')";
     }

      if(!empty($brand)){
         $branddata =implode("','",$brand);
         $query  .= " and product_brand in('$branddata')";
     }

     if(!empty($size)){
         $sizedata =implode("','",$size);
         $query  .= " and product_size in('$sizedata')";
     }

     if(!empty($price)){
       $pricedata =implode("','",$price);
        $query  .= " and product_price in('$pricedata')";
     }

    $rs = mysqli_query($conn,$query) or die("Error : ".mysqli_error());

    while($product_data = mysqli_fetch_assoc($rs)){
 ?>
  <div class="productlist">
       <div class="thumbnail">
           <img src="<?php echo $product_data['product_image']; ?>" alt="">
           <div class="caption">

               <p style="text-align:center;"><strong><a href="#"><?php echo $product_data['product_name']; ?></a>
               </strong></p>
                <h4 style="text-align:center;" >$ <?php echo $product_data['product_price']; ?></h4>
               <p>Color : <?php echo $product_data['product_color']; ?> &nbsp; &nbsp; &nbsp; &nbsp;  Brand : <?php echo $product_data['product_brand']; ?> </p>

               <p>Size : <?php echo $product_data['product_size']; ?> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity : <?php echo $product_data['product_quantity']; ?> </p>

           </div>

       </div>
   </div>
<?php  } ?>
