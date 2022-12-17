<?php
include './component/header.php';
?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Returning customer? <a href="#">Click here</a> to login
            </div>
          </div>
        </div>
        <div class="col-md-12">

<form action="./control/xl_checkout.php" method="POST">
  <div class="col-md-12">
    <h2 class="h3 mb-12 text-black">Billing Details</h2>
    <div class="p-3 p-lg-5 border">
    
      <div class="form-group row">
        <div class="col-md-12">
          <label for="c_fname" class="text-black">Name  <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="name_receiv">
        </div>
       
      </div>

      

      <div class="form-group row">
        <div class="col-md-12">
          <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="address_receiv" >
        </div>
      </div>

     

     

      <div class="form-group row mb-5">
       
        <div class="col-md-12">
          <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
          <input type="text" class="form-control"  name="phone_receiv" >
        </div>
      </div>

     


     
    

    </div>
    <!-- <button  name="submit">Checkout</button> -->
    <div class="form-group">
            <button class="btn btn-primary btn-lg py-3 btn-block" type="submid" name="submit" >Đặt hàng</button>
          </div>
  </div> 

  </form> <!-- form info -->

</div>
        <!-- </form> -->
      </div>
    </div>

   

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