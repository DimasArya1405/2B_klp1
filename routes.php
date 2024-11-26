<?php
// routes.php

require_once 'app/controllers/SponsorshipsController.php';

$sponsorshipsController = new SponsorshipsController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/sponsorships/index' || $url == '/') {
    $sponsorshipsController->index();
} elseif ($url == '/sponsorships/create' && $requestMethod == 'GET') {
    $sponsorshipsController->create();
} elseif ($url == '/sponsorships/store' && $requestMethod == 'POST') {
    $sponsorshipsController->store();
} elseif (preg_match('/\/sponsorships\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $sponsorshipsController->edit($userId);
} elseif (preg_match('/\/sponsorships\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $sponsorshipsController->update($userId, $_POST);
} elseif (preg_match('/\/sponsorships\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $sponsorshipsController->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}