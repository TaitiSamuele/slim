<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include 'controller/SitoController.php';
include 'controller/AlunniController.php';
include 'controller/AlunniApiController.php';
include 'controller/ImpiantoController.php';


$app = AppFactory::create();

$app->get('/', "SitoController:index");

$app->get('/alunni', "AlunniController:index");
$app->get('/alunni/{nome}', "AlunniController:show");

$app->get('/api/alunni', "AlunniApiController:index");

//verifica 

$app->get("/impianto","ImpiantoController:index");
$app->get("/dispositivi_di_allarme","ImpiantoController:allarme");
$app->get("/dispositivi_di_allarme/{id}","ImpiantoController:IDallarme");




$app->run();
