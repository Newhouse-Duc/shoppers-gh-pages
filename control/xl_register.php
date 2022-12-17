<?php
require 'connectdb.php';


if(isset($_POST['submit'])){
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);

    if (empty($name)) {
        array_push($errors, "Username is required"); 
        }
    if (empty($email)) {
        array_push($errors, "Email is required"); 
        }
   
    if (empty($password)) {
        array_push($errors, " password is required"); 
        }
    $sql = "SELECT * FROM guest WHERE  email = '$email'";
    $result = mysqli_query($connect, $sql);   
    if (mysqli_num_rows($result) > 0)
        {
        echo '<script language="javascript">alert("Bị trùng  email vui lòng đăng kí lại !"); window.location="../register.php";</script>';

    // Dừng chương trình
    die ();
        }
        else {
            $sql = "INSERT INTO guest (name, email,password, phone, address) VALUES ('$name','$email','$password', '$phone', '$address')";
            $result = mysqli_query($connect, $sql);   
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="../login.php"</script>';
       
        die ();
            
        }
  

}
    