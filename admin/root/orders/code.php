<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM `order` WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ../tableOrders.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: ../tableOrders.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $guest_id = mysqli_real_escape_string($connect, $_POST['guest_id']);
    $name_receiv = mysqli_real_escape_string($connect, $_POST['name_receiv']);
    $phone_receiv = mysqli_real_escape_string($connect, $_POST['phone_receiv']);
    $address_receiv = mysqli_real_escape_string($connect, $_POST['address_receiv']);
    $sum_pri = mysqli_real_escape_string($connect, $_POST['sum_pri']);
    $status = mysqli_real_escape_string($connect, $_POST['status']);
    $date_time = mysqli_real_escape_string($connect, $_POST['date_time']);
    

    $query = "UPDATE order SET guest_id='$guest_id', name_receiv='$name_receiv', phone_receiv='$phone_receiv', address_receiv='$address_receiv', sum_pri='$sum_pri', status='$status', date_time='$date_time' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: ../tableOrders.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: ../tableOrders.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    $guest_id = mysqli_real_escape_string($connect, $_POST['guest_id']);
    $name_receiv = mysqli_real_escape_string($connect, $_POST['name_receiv']);
    $phone_receiv = mysqli_real_escape_string($connect, $_POST['phone_receiv']);
    $address_receiv = mysqli_real_escape_string($connect, $_POST['address_receiv']);
    $sum_pri = mysqli_real_escape_string($connect, $_POST['sum_pri']);
    $status = mysqli_real_escape_string($connect, $_POST['status']);
    $date_time = mysqli_real_escape_string($connect, $_POST['date_time']);

    $query = "INSERT INTO order (guest_id,name_receiv,phone_receiv,address_receiv,sum_pri,status,date_time,cart_payment) VALUES ('$guest_id','$name_receiv','$phone_receiv','$address_receiv','$sum_pri','$status','$date_time')";

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
