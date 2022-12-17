<?php

$name_receiver = $_POST['name_receiv'];
$phone_receiver = $_POST['phone_receiv'];
$address_receiver = $_POST['address_receiv'];

require '../connectdb.php';

session_start();



	$cart = $_SESSION['cart'];

	$total_price = 0;
	foreach ($cart as $each) {
		$total_price += $each['quantity'] * $each['price'];
	}
	$customer_id = $_SESSION['id'];
	$status = 0; //mới đặt

	$sql = "insert into `order` (guest_id, name_receiv, phone_receiv, address_receiv, status, sum_pri)
values ('$customer_id', '$name_receiver', '$phone_receiver', '$address_receiver', '$status', '$total_price')";
	mysqli_query($connect, $sql);


	$sql = "select max(id) from `order` where guest_id = '$customer_id'";

	$result = mysqli_query($connect, $sql);
	$order_id = mysqli_fetch_array($result)['max(id)'];

	foreach ($cart as $product_id => $each) {
		$quantity = $each['quantity'];
		$sql = "insert into invoice_details(order_id, product_id, quantity)
	values('$order_id', '$product_id', '$quantity')";
		mysqli_query($connect, $sql);
	}

	mysqli_close($connect);
	unset($_SESSION['cart']);

	header('location:../thankyou.php');


