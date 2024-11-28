<?php
// routes.php

require_once 'app/controllers/user5controllers.php';
require_once 'app/controllers/AccommodationsController.php';
require_once 'app/controllers/user5controllers.php';
require_once 'app/controllers/ReservationController.php';
require_once 'app/controllers/AccommodationsController.php';

$controller = new AccommodationsController();
$controller = new User5Controller();
$controller = new ReservationController();
$controller = new User5Controller();
$controller = new AccommodationsController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/Accommodations/index' || $url == '/') {
if ($url == '/user5/index' || $url == '/') {
if ($url == '/Accommodations/index' || $url == '/') {
if ($url == '/user5/index' || $url == '/') {
if ($url == '/Reservation/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/user5/create' && $requestMethod == 'GET') {
} elseif ($url == '/Reservation/create' && $requestMethod == 'GET') {
} elseif ($url == '/Accommodations/create' && $requestMethod == 'GET') {
} elseif ($url == '/user5/create' && $requestMethod == 'GET') {
} elseif ($url == '/Accommodations/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/user5/store' && $requestMethod == 'POST') {
} elseif ($url == '/Accommodations/store' && $requestMethod == 'POST') {
} elseif ($url == '/user5/store' && $requestMethod == 'POST') {
} elseif ($url == '/Reservation/store' && $requestMethod == 'POST') {
} elseif ($url == '/Accommodations/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/user5\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $user5Id = $matches[1];
    $controller->edit($user5Id);
} elseif (preg_match('/\/user5\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $user5Id = $matches[1];
    $controller->update($user5Id, $_POST);
} elseif (preg_match('/\/user5\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $user5Id = $matches[1];
    $controller->delete($user5Id);
} elseif (preg_match('/\/Accommodations\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $AccommodationsId = $matches[1];
    $controller->edit($AccommodationsId);
} elseif (preg_match('/\/Accommodations\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $AccommodationsId = $matches[1];
    $controller->update($AccommodationsId, $_POST);
} elseif (preg_match('/\/Accommodations\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $AccommodationsId = $matches[1];
    $controller->delete($AccommodationsId);
} elseif (preg_match('/\/Reservation\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/Reservation\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/Reservation\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} elseif (preg_match('/\/user5\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $user5Id = $matches[1];
    $controller->edit($user5Id);
} elseif (preg_match('/\/user5\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $user5Id = $matches[1];
    $controller->update($user5Id, $_POST);
} elseif (preg_match('/\/user5\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $user5Id = $matches[1];
    $controller->delete($user5Id);
} else {
    http_response_code(404);
    echo "404 Not Found";
}