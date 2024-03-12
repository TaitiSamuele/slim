<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once 'Impianto.php';
require_once 'DispositivoDiAllarme.php';

Class ImpiantoController{

    public function index(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");

        $response->getBody()->write(json_encode($impianto));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function allarme(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $all = new DispositivoDiAllarme("1");
        $impianto -> addAllarme($all);

        $response->getBody()->write(json_encode($impianto->getDispositiviDiAllarme()));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function IDallarme(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $all = new DispositivoDiAllarme("1");
        $impianto -> addAllarme($all);

        $all1 = $impianto -> getAllarme($args["id"]);

        $response->getBody()->write(json_encode($all1));
        return $response -> withHeader('Content-Type', 'application/json');
    }


}