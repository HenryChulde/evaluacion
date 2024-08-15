<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Client';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

require_once 'controllers/' . $controller . 'Controller.php';

$controllerName = $controller . 'Controller';
$controllerObject = new $controllerName();

if ($id) {
    $controllerObject->$action($id);
} else {
    $controllerObject->$action();
}
