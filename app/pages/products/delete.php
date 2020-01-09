<?php

    $id = $_GET['id'];
    $database->query("DELETE FROM products WHERE id=$id");

    header("location: /");
