<?php
// routes.php

require_once 'app/controllers/AttendeesController.php';

$controller = new AttendeesController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/attendees/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/attendees/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/attendees/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/attendees\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/attendees\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/attendees\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}

