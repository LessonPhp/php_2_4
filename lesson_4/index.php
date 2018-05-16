<?php

require __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ? $_GET['ctrl'] : 'Index';
$action = $_GET['action'] ? $_GET['action'] : 'Index';

$class = '\App\Controllers\\' . $ctrl;
$controller = new $class;
$controller->action($action);
