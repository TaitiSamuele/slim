<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include 'controller/SitoController.php';
include 'controller/AlunniController.php';
include 'controller/AlunniApiController.php';


$app = AppFactory::create();

$app->get('/', "SitoController:index");

$app->get('/alunni', "AlunniController:index");
$app->get('/alunni/{nome}', "AlunniController:show");

$app->get('/api/alunni', "AlunniApiController:index");




$app->run();
