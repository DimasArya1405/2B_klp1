<?php
// routes.php

require_once 'app/controllers/AttendeesController.php';

$attendeesController = new AttendeesController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/attendees/index' || $url == '/') {
    $attendeesController->index();
} elseif ($url == '/attendees/create' && $requestMethod == 'GET') {
    $attendeesController->create();
} elseif ($url == '/attendees/store' && $requestMethod == 'POST') {
    $attendeesController->store();
} elseif (preg_match('/\/attendees\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $attendeesController->edit($userId);
} elseif (preg_match('/\/attendees\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $attendeesController->update($userId, $_POST);
} elseif (preg_match('/\/attendees\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $attendeesController->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}

