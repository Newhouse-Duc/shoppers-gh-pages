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
                        <h4>Student View Details
                            <a href="../productTable.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM products WHERE id='$id' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $value = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>name</label>
                                    <p class="form-control">
                                        <?= $value['name']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>detail</label>
                                    <p class="form-control">
                                        <?= $value['detail']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>img</label>
                                    <p class="form-control">
                                        <?= $value['img']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>price</label>
                                    <p class="form-control">
                                        <?= $value['price']; ?>
                                    </p>
                                </div>
                                
                                <div class="mb-3">
                                    <label>idcategory</label>
                                    <p class="form-control">
                                        <?= $value['idcategory']; ?>
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