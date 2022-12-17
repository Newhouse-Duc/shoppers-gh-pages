<?php
$email = $_POST['email'];
$password = $_POST['password'];


require '../connectdb.php';
$sql = "select * from guest  where email = '$email' and password = '$password' ";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result);

if($number_rows==1)
{
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['email'] = $each['email'];
    $_SESSION['name'] = $each['name'];
    $_SESSION['phone'] = $each['phone'];
    $_SESSION['address'] = $each['address'];
    header('location: ../index.php');
    
}else
{
    echo '<script language="javascript">alert("Đăng nhập không thành công vui lòng kiểm tra lại thông tin "); window.location="../login.php";</script>';
     
}
