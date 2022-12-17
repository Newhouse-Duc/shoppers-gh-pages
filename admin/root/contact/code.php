<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM contact WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ../tableContact.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: ../tableContact.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);

    $query = "UPDATE contact SET name='$name', email='$email', phone='$phone', message='$message' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: ../tableContact.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: ../tableContact.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);

    $query = "INSERT INTO contact (name,,email,phone,message) VALUES ('$name','$email','$phone','$message')";

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
