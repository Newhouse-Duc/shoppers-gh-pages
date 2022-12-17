<?php
include './component/header.php';

$id="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

if (empty($_SESSION['cart'])) {
  require 'connectdb.php';
  $sql = "select * from `order`
	where guest_id = '$id'";
  $result = mysqli_query($connect, $sql);
  $each = mysqli_fetch_array($result);

}


?>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Trang chủ </a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Thông tin cá nhân</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTocZNbepgpX1LE05TQxdp4Bal_V0eVnH0n4g&usqp=CAU" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $_SESSION['name'] ?></h5>
           
            <div class="d-flex justify-content-center mb-2">
              <!-- <button type="button" class="btn btn-primary">Follow</button> -->
              <a href="logout.php"><button type="button" class="btn btn-outline-primary ms-1">Đăng xuất</button></a>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
            <li class="list-group-item justify-content-between align-items-center p-3">
              <a href="person.php"><button class="btn btn-primary btn-lg py-3 btn-block" >Thông tin cá nhân </button></a>
              </li>
              <li class="list-group-item  justify-content-between align-items-center p-3"   >
              <a href="cart.php"><button class="btn btn-primary btn-lg py-3 btn-block" >Xem giỏ hàng</button></a>
                
              </li>
              <li class="list-group-item justify-content-between align-items-center p-3">
              <a href="person_dathang.php"><button class="btn btn-primary btn-lg py-3 btn-block" >Thông tin thanh toán </button></a>
              </li>
             
             
             
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
     
        <div class="card mb-4">
          <div class="card-body">
          <?php 
                
                if(is_array($cart) || is_object($cart))
                      foreach ($cart as $id => $each): ?>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">NGười nhận</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $each['name_receiv'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tổng tiền</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $each['sum_pri'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $each['phone_receiv'] ?></p>
              </div>
            </div>
            <hr>
        
          
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['address_receiv'] ?></p>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>


<?php

include './component/footer.php';
 ?>