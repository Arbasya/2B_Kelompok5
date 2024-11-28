<?php
// routes.php

require_once 'app/controllers/user5controllers.php';
require_once 'app/controllers/AccommodationsController.php';
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
    $reservation->create();
} elseif ($url == '/Accommodations/create' && $requestMethod == 'GET') {
    $accommodation->create();
} elseif ($url == '/user5/store' && $requestMethod == 'POST') {
    $user5->store();
} elseif ($url == '/Reservation/store' && $requestMethod == 'POST') {
    $reservation->store();
} elseif ($url == '/Accommodations/store' && $requestMethod == 'POST') {
    $accommodation->store();

} elseif (preg_match('/\/user5\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $user5Id = $matches[1];
    $user5->edit($user5Id);
} elseif (preg_match('/\/user5\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $user5Id = $matches[1];
    $user5->update($user5Id, $_POST);
} elseif (preg_match('/\/user5\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $user5Id = $matches[1];
    $user5->delete($user5Id);


} elseif (preg_match('/\/Accommodations\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $AccommodationsId = $matches[1];
    $accommodation->edit($AccommodationsId);
} elseif (preg_match('/\/Accommodations\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $AccommodationsId = $matches[1];
    $accommodation->update($AccommodationsId, $_POST);
} elseif (preg_match('/\/Accommodations\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $AccommodationsId = $matches[1];
    $accommodation->delete($AccommodationsId);


} elseif (preg_match('/\/Reservation\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $reservation->edit($userId);
} elseif (preg_match('/\/Reservation\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $reservation->update($userId, $_POST);
} elseif (preg_match('/\/Reservation\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $reservation->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}