<?php
session_start();


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
                        <h4>Student Add
                            <a href="../productTable.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="code.php" method="POST">

                            <div class="mb-3">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" data-rule-required="true" data-rule-minlength="1" data-msg-required="Please enter Name.">
                            </div>
                            <div class="mb-3">
                                <label>detail</label>
                                <input type="text" name="detail" class="form-control" data-rule-required="true" data-msg-required="Please enter Detail">
                            </div>
                            <div class="mb-3">
                                <label>img</label>
                                <input type="text" name="img" class="form-control" data-rule-required="true" data-msg-required="Please enter IMG.">
                            </div>
                            <div class="mb-3">
                                <label>price</label>
                                <input type="text" name="price" class="form-control" data-rule-required="true" data-rule-minlength="5" data-msg-required="Please enter PRICE.">
                            </div>
                            <div class="mb-3">
                                <label>idcategory [1 - Ch??] [2 - M??o]</label>
                                <input type="text" name="idcategory" class="form-control" data-rule-required="true" data-rule-minlength="1" data-msg-required="Please enter IDCATEGORY.">
                                
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">TH??m</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php include('../jquery_from.php') ?>
</body>

</html>