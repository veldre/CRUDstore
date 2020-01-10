<?php
require __DIR__ . '/vendor/autoload.php';

$page = $_GET['page'] ?? 'products';
$action = $_GET['action'] ?? 'index';

use App\Classes\Controller;
use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'shop',
    'server' => 'localhost',
    'username' => 'veldre',
    'password' => 'codelex123'
]);

$controller = new Controller();
include $controller->getRoute($page, $action);


