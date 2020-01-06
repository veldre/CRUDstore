<?php
include 'config.php';
include 'database.php';

include __DIR__ . '/vendor/autoload.php';


$page = $_GET['page'] ?? 'products';
$action = $_GET['action'] ?? 'index';


use App\Classes\Controller;

$controller = new Controller();
include $controller->getRoute($page, $action);


