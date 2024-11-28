<?php
// Accommodations_routes.php

require_once 'app/controllers/user5controllers.php';

$controller = new User5Controller();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/user5/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/user5/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/user5/store' && $requestMethod == 'POST') {
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
} else {
    http_response_code(404);
    echo "404 Not Found";
}