<?php
// routes.php

require_once 'app/controllers/EventsController.php';

$controller = new EventsController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/events/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/events/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/events/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/events\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/events\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/events\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}