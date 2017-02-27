<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
 #   $name = $request->getAttribute('name');
 #   $response->getBody()->write("Hello, $name");
	$response->write("Karan gajjar's Slim");
    return $response;
});

$app->get('/friends', function ($request, $response, $args) {
 $response->write("Hello Friends!");
 return $response;
});

#require '../src/routes/customer.php'; 

$app->run();