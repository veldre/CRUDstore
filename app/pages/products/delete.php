<?php
session_start();

$name = $_GET['name'];

$database->delete('products', ['id' => $_GET['id']]);

$_SESSION['message'] = "Product \"$name\" has been deleted!";
$_SESSION['msg_type'] = "danger";
header('location: /');
