<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once 'Alunno.php';
require_once 'Classe.php';

class AlunniApiController
{
    public function index(Request $request, Response $response, $args)
    {
        $classe = new Classe("5dia");

        $response->getBody()->write(json_encode($classe));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function show(Request $request, Response $response, $args)
    {
        $classe = new Classe("5dia");
        $nome = $args["nome"];


        if ($classe->isSetAlunno($nome)) {
            $response->getBody()->write($classe->getAlunno($nome) . "");
        } else {
            $response->getBody()->write("alunno non trovato");
        }

        return $response;
    }
}