<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['id']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['address']);
unset($_SESSION['cart']);
header('location: index.php');