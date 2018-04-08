<?php

require __DIR__ . '/autoload.php';

// второй вариант

if(isset($_GET['ctrl'])) {
    $ctrl = $_GET['ctrl'];
} else {
    $ctrl = 'Index';
}


if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'Index';
}


$class = '\App\Controllers\\' . $ctrl;
$controller = new $class;

$controller->action($action);


// первый вариант

//$ctrl = new App\Controllers\Index();
//$ctrl->actionIndex();
//$ctrl();