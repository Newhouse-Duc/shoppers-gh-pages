<?php
require 'connectdb.php';
$sql = "select * from products where hot_pick = '1'";
$result = mysqli_query($connect, $sql);


?>




<div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
            <?php foreach ($result as $each): ?>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                  <a href="shop-single.php?id=<?php echo $each['id'] ?>"><img src="<?php echo $each['img'] ?>" alt="" class="img-fluid"></a>	
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><?php echo $each['name'] ?></h3>
                  
                    <p class="text-primary font-weight-bold"><?php echo $each['price'] ?></p>
                    
                                    <?php if(!empty($_SESSION['id'])){ ?>
				                            <br>
				                            <a href="add_to_cart.php?id=<?php echo $each['id'] ?>" class="btn btn-primary">
                                            Add to Cart
                                                    </a>
                                     <?php } ?>
                  </div>
                </div>
              </div>
              <?php endforeach ?>


           
            </div>
          </div>
        </div>
      </div>
    </div>