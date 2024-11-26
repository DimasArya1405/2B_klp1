<?php
// routes.php

require_once 'app/controllers/OrganizersController.php';

$controller = new OrganizersController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/organizers/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/organizers/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/organizers/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/organizers\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/organizers\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/organizers\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}