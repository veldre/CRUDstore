<?php
require __DIR__ . '/vendor/autoload.php';

$page = $_GET['page'] ?? 'products';
$action = $_GET['action'] ?? 'index';

use App\Classes\Controller;
use Medoo\Medoo;
use Plasticbrain\FlashMessages\FlashMessages;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'shop',
    'server' => 'localhost',
    'username' => 'veldre',
    'password' => 'codelex123'
]);

$controller = new Controller();
include $controller->getRoute($page, $action);

// Start a session
if (!session_id()) @session_start();


// Instantiate the class
$msg = new FlashMessages();


// Add some messages
//$msg->info('Product \"$name\" has been added!');
//$msg->success('This is a success message');
//$msg->warning('This is a warning message');
//$msg->error('This is an error message');


// Display the messages
//$msg->display();
