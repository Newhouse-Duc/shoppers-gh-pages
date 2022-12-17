<?php
include './component/header.php';
?>

<?php
require 'connectdb.php';


// $number_product = "select count(*) form prodcuts";
// $mang_product = mysqli_query( $connect, $number_product);



// $result_product = mysqli_fetch_array($mang_product);

//   $count_product =  $result_product['count(*)'];



//   $count_product_page = 9; 
  
//   $number_page = ceil($count_product/ $count_product_page);

// $sql = "select * from products ";
// $result = mysqli_query($connect, $sql);
if (isset($_GET['pageno'])) {
  $pageno = $_GET['pageno'];
} else {
  $pageno = 1;
}
$count_product_page = 9;
$offset = ($pageno-1) * $count_product_page;


// Check connection kiểm tra kết nối với cơ sở dữ liệu
$total_pages_sql = "SELECT COUNT(*) FROM products where idcategory = 1";
$result = mysqli_query($connect,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $count_product_page);

$sql = "SELECT * FROM products where idcategory = 3 LIMIT $offset, $count_product_page";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result)){
  //here goes the data _ dữ liệu của bạn xuất hiện khi click nút phân trang tại đây
}
mysqli_close($connect);



?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Chó</a>
                      <a class="dropdown-item" href="#">Mèo</a>
                      <!-- <a class="dropdown-item" href="#">Children</a> -->
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
            <?php foreach ($result as $each): ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <img src="<?php echo $each['img'] ?>" alt="" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3 style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 1;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?php echo $each['name'] ?></h3>
                    <p class="mb-0"> <a href="shop-single.php?id=<?php echo $each['id'] ?>">Xem chi tiết</a>  </p>
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
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <!-- <li><a href="#">&lt;</a></li> -->
                    <?php
                        for($i =1; $i<= $total_pages; $i++) 
                        { ?>
                           <li ><span><a href="?pageno=<?php echo $i ?>"><?php echo $i ?></a></span></li>
                    <!-- <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li> -->
                    <!-- <li><a href="#">&gt;</a></li> -->
                    <?php    }
                    ?>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="dog.php"><span >Chó</span></a></li>
                <li class="mb-1"><a href="cat.php" ><span >Mèo</span></a></li>
                <li class="mb-1"><a href="cage.php"><span >Chuồng</span></a></li>
                <li class="mb-1"><a href="food.php" ><span >Thức ăn</span></a></li>   
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

         

            </div>
          </div>
        </div>

       
        
      </div>
    </div>

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