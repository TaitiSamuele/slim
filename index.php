<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include 'controller/ImpiantoController.php';


$app = AppFactory::create();

//verifica 

$app->get("/impianto","ImpiantoController:index");
$app->get("/dispositivi_di_allarme","ImpiantoController:allarme");
$app->get("/dispositivi_di_allarme/{id}","ImpiantoController:IDallarme");

$app->get("/rilevatori_di_pressione","ImpiantoController:pressione");
$app->get("/rilevatori_di_pressione/{id}","ImpiantoController:IDpressione");
$app->get("/rilevatori_di_pressione/{id}/misurazioni","ImpiantoController:IDpressioneMisurazioni");

$app->get("/rilevatori_di_umidita","ImpiantoController:umidita");
$app->get("/rilevatori_di_umidita/{id}","ImpiantoController:IDumidita");
$app->get("/rilevatori_di_umidita/{id}/misurazioni","ImpiantoController:IDumiditaMisurazioni");


$app->run();
