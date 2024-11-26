<?php
// routes.php

require_once 'app/controllers/SponsorshipsController.php';

$controller = new SponsorshipsController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/sponsorships/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/sponsorships/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/sponsorships/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/sponsorships\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/sponsorships\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/sponsorships\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}