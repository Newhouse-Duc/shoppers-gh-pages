<?php
require '../db/connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title></title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Xem thông tin Order
                            <a href="../tableOrders.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM  `order` WHERE id='$id' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $value = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>Id khách hàng</label>
                                    <p class="form-control">
                                        <?= $value['guest_id']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> Tên người nhận</label>
                                    <p class="form-control">
                                        <?= $value['name_receiv']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> Số Điện thoại</label>
                                    <p class="form-control">
                                        <?= $value['phone_receiv']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Địa chỉ  </label>
                                    <p class="form-control">
                                        <?= $value['address_receiv']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> Tổng tiền</label>
                                    <p class="form-control">
                                        <?= $value['sum_pri']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> Trạng thái</label>
                                    <p class="form-control">
                                        <?= $value['status']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Ngày giờ</label>
                                    <p class="form-control">
                                        <?= $value['date_time']; ?>
                                    </p>
                                </div>
                                

                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>