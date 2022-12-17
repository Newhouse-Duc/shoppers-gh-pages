<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM products WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ../productTable.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: ../productTable.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $detail = mysqli_real_escape_string($connect, $_POST['detail']);
    $img = mysqli_real_escape_string($connect, $_POST['img']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $idcategory = mysqli_real_escape_string($connect, $_POST['idcategory']);

    $query = "UPDATE products SET name ='$name', detail='$detail', img='$img', price='$price', idcategory='$idcategory' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: ../productTable.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: ../productTable.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($connect, $_POST['img']);
    $detail = mysqli_real_escape_string($connect, $_POST['detail']);
    $img = mysqli_real_escape_string($connect, $_POST['img']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $idcategory = mysqli_real_escape_string($connect, $_POST['idcategory']);

    $query = "INSERT INTO products (name,detail,img,price,idcategory) VALUES ('$name','$detail','$img','$price','$idcategory')";

    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        header("Location: create.php");
        exit(0);
    }
}
