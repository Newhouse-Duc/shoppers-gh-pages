<?php 
session_start();

// $id = $_GET['id'];
$id="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

if(empty($_SESSION['cart'][$id])){
	require 'connectdb.php';
	$sql = "select * from products
	where id = '$id'";
	$result = mysqli_query($connect, $sql);
	$each = mysqli_fetch_array($result);
	$_SESSION['cart'][$id]['name'] = $each['name'];
	$_SESSION['cart'][$id]['img'] = $each['img'];
	$_SESSION['cart'][$id]['price'] = $each['price'];
	$_SESSION['cart'][$id]['detail'] = $each['detail'];
	$_SESSION['cart'][$id]['quantity'] = 1;



} else {
	$_SESSION['cart'][$id]['quantity']++;
}

print_r($_SESSION['cart']);
header('location: cart.php');
// echo json_encode($_SESSION['cart']);
