<?php
// routes.php

require_once 'app/controllers/AccommodationsController.php';

$controller = new AccommodationsController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/Accommodations/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/Accommodations/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/Accommodations/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/Accommodations\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $AccommodationsId = $matches[1];
    $controller->edit($AccommodationsId);
} elseif (preg_match('/\/Accommodations\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $AccommodationsId = $matches[1];
    $controller->update($AccommodationsId, $_POST);
} elseif (preg_match('/\/Accommodations\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $AccommodationsId = $matches[1];
    $controller->delete($AccommodationsId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}