<?php

    $id = $_GET['id'];
    $connect->query("DELETE FROM products WHERE id=$id");

    header("location: /");
