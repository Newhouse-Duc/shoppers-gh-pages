
<?php
include './component/header.php';


$id = $_GET['id'];
$sql = "select * from products where  id = '$id'";

$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tank Top T-Shirt</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $each['img'] ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $each['name'] ?></h2>
            <p></p>
            <p class="mb-4"> <?php echo $each['detail'] ?></p>
            <p><strong class="text-primary h4"><?php echo $each['price'] ?> </strong></p>
            
            <?php if(!empty($_SESSION['id'])){ ?>
              <p><a href="add_to_cart.php?id=<?php echo $each['id'] ?>" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>
                                     <?php } ?>
          
           

          </div>
        </div>
      </div>
    </div>
<?php 

include "hotpick.php";


?>
 

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