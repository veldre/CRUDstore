<?php
include 'config.php';
include 'database.php';
include 'classes/Controller.php';
include __DIR__ . '/classes/Product.php';
include __DIR__ . '/includes/bootstrap.php';
include __DIR__ . '/includes/messages.php';
include __DIR__ . '/includes/functions.php';


$page = $_GET['page'] ?? 'products';
$action = $_GET['action'] ?? 'index';

$controller = new Controller();


include $controller->getRoute($page, $action);


