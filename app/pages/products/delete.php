<?php

$database->delete('products', ['id' => $_GET['id']]);

header('location: /');
