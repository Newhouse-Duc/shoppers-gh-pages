<?php

require '../connectdb.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, phone,email, message) VALUES ('$name','$phone', '$email', '$message')";
    $result = mysqli_query($connect, $sql);   
    echo '<script language="javascript">alert("Bạn đã gửi phản hồi thành công !"); window.location="../contact.php"</script>';


}
