<?php
session_start();
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

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Edit
                            <a href="../tableOrders.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM `order` WHERE id='$id' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label> Id người nhận   </label>
                                        <input type="text" name="guest_id" value="<?= $student['guest_id']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Tên người nhận</label>
                                        <input type="text" name="name_receiv" value="<?= $student['name_receiv']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Số điện thoại nhận</label>
                                        <input type="text" name="phone_receiv" value="<?= $student['phone_receiv']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Địa chỉ nhận</label>
                                        <input type="text" name="address_receiv" value="<?= $student['address_receiv']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Tổng tiền</label>
                                        <input type="text" name="sum_pri" value="<?= $student['sum_pri']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Trạng thái</label>
                                        <input type="text" name="status" value="<?= $student['status']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Ngày giờ</label>
                                        <input type="text" name="date_time" value="<?= $student['date_time']; ?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update Order
                                        </button>
                                    </div>

                                </form>
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