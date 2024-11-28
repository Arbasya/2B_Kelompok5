<?php
// routes.php

require_once 'app/controllers/ReservationController.php';
require_once 'app/controllers/HomeController.php';

$controller = new ReservationController();
$home = new HomeController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/Home/index' || $url == '/') {
    $home->index();
}elseif ($url == '/Reservation/index' || $url == '/') {
        $controller->index();
} elseif ($url == '/Reservation/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/Reservation/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/Reservation\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/Reservation\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/Reservation\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}