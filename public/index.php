<?php

// Bootstrap the application
$app = require __DIR__ . '../bootstrap/app.php';

// Load router and handle request
$router = new League\Route\Router;
$request = new Request();

$router->get('/hello-word', 'Acme\HelloWorldController::page');

$response = $router->dispatch($request);
