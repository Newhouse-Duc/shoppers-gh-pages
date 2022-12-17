
<?php
include './component/header.php';
?>
<?php


require 'connectdb.php';
$cart = "";
if (isset($_SESSION['cart'])) {
  $cart = $_SESSION['cart'];
}

$sum = 0;


?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
                if(is_array($cart) || is_object($cart))
                      foreach ($cart as $id => $each): ?>
                  <tr>
                    <td class="product-thumbnail">
                    <img src="<?php echo $each['img'] ?>" alt="" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $each['name'] ?></h2>
                    </td>
                    <td><?php echo $each['price'] ?>VNĐ</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;" >
                        <div class="input-group-prepend">
                          <a href="slproduct.php?id=<?php echo $id ?>&type=decrea"class="btn btn-outline-primary ">
                                  -
                                </a>
                        </div>
                          <label  class="form-control text-center">       <?php echo $each['quantity'] ?></label>
                        
                        <div class="input-group-append">
                          
                          <a href="slproduct.php?id=<?php echo $id ?>&type=incre" class="btn btn-outline-primary ">
                                          +
                                        </a>
                        </div>
                      </div>

                    </td>
                    <td>
                    <?php 

                          $result = $each['price']  * $each['quantity'];
                          $sum += $result;
                          echo $result ?> 
                    VNĐ</td>
                    <td><a href="delete_prd_cart.php?id=<?php echo $id ?>" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <?php endforeach ?>
                  
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
             
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block"> <a href="shop.php">Continue Shopping</a></button>
              </div>
            </div>
            
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
             
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"> <?php echo $sum ?> VNĐ</strong>
                  </div>
                </div>

                <div class="row">
                <?php if(!empty($_SESSION['cart'] )) {?>
                  
                  <div class="col-md-12">
                    <a href="./checkout.php"><button class="btn btn-primary btn-lg py-3 btn-block" >Đặt hàng</button></a>
                    <h2>-------------------------------</h2>
                  </div>
                  <?php } ?>
                  

                </div>
                <?php if(!empty($_SESSION['cart'] )) {?>
                <div class="row">
                  <div class="col-md-12">
                        <a href="vnpay_create_payment.php"><button class="btn btn-primary btn-lg py-3 btn-block" >Đặt hàng & Thanh toán</button></a>
                  </div>
                </div>
                <?php } ?>


               
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-12">


    <?php

include './component/footer.php';
 ?>
   
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>