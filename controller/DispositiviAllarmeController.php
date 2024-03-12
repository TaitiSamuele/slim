<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once '../DispositivoDiAllarme.php';

Class DispositiviAllarmeController{

    public function index(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");

        $response->getBody()->write(json_encode($impianto));
        return $response -> withHeader('Content-Type', 'application/json');
    }
    public function allarme(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $impianto->

        $response->getBody()->write(json_encode($impianto));
        return $response -> withHeader('Content-Type', 'application/json');
    }
}