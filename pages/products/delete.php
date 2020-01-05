<?php
session_start();

    $id = $_GET['id'];
    $name = $_GET['name'];
    $connect->query("DELETE FROM products WHERE id=$id");

    $_SESSION['message'] = "Product \"$name\" has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: /");
