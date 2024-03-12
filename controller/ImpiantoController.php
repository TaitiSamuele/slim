<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once 'Impianto.php';
require_once 'DispositivoDiAllarme.php';
require_once 'Rilevatore.php';
require_once 'RilevatoreDiPressione.php';
require_once 'RilevatoreDiUmidita.php';

Class ImpiantoController{

    public function index(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");

        $response->getBody()->write(json_encode($impianto));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function allarme(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $all = new DispositivoDiAllarme("1");
        $all1 = new DispositivoDiAllarme("2");
        $impianto -> addAllarme($all);
        $impianto -> addAllarme($all1);

        $response->getBody()->write(json_encode($impianto->getDispositiviDiAllarme()));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function IDallarme(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $all = new DispositivoDiAllarme("1");
        $all = new DispositivoDiAllarme("1");
        $all1 = new DispositivoDiAllarme("2");
        $impianto -> addAllarme($all);
        $impianto -> addAllarme($all1);

        $all1 = $impianto -> getAllarme($args["id"]);

        $response->getBody()->write(json_encode($all1));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function pressione(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $pres = new RilevatoreDiPressione("1", "qwerty", "terra", "200");
        $pres1 = new RilevatoreDiPressione("2", "wasd", "aria", "1000");
        $pres2 = new RilevatoreDiPressione("3", "zxcvc", "terra", "150");

        $pres -> addMisura("12/12/2020", "1000");

        $impianto -> addRivelatore($pres);
        $impianto -> addRivelatore($pres1);
        $impianto -> addRivelatore($pres2);

        $response->getBody()->write(json_encode($impianto -> getDispositiviPressione()));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function IDpressione(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $pres = new RilevatoreDiPressione("1", "qwerty", "terra", "200");
        $pres1 = new RilevatoreDiPressione("2", "wasd", "aria", "1000");
        $pres2 = new RilevatoreDiPressione("3", "zxcvc", "terra", "150");
        $impianto -> addRivelatore($pres);
        $impianto -> addRivelatore($pres1);
        $impianto -> addRivelatore($pres2);

        $pres = $impianto -> getpressione($args["id"]);

        $response->getBody()->write(json_encode($pres));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function IDpressioneMisurazioni(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $pres = new RilevatoreDiPressione("1", "qwerty", "terra", "200");
        $pres1 = new RilevatoreDiPressione("2", "wasd", "aria", "1000");
        $pres2 = new RilevatoreDiPressione("3", "zxcvc", "terra", "150");

        $pres -> addMisura("12/12/2020", "1000");

        $impianto -> addRivelatore($pres);
        $impianto -> addRivelatore($pres1);
        $impianto -> addRivelatore($pres2);

        $pres = $impianto -> getpressione($args["id"]);

        $response->getBody()->write(json_encode($pres -> getMisurazioni()));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function umidita(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $umid = new RilevatoreDiUmidita("1", "qwerty", "100", "acqua");
        $umid1 = new RilevatoreDiUmidita("2", "qwerty", "100", "gas");

        $impianto -> addRivelatore($umid1);
        $impianto -> addRivelatore($umid);


        $response->getBody()->write(json_encode($impianto -> getDispositiviUmidita()));
        return $response -> withHeader('Content-Type', 'application/json');
    }
    
    public function IDumidita(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $umid = new RilevatoreDiUmidita("1", "qwerty", "100", "acqua");
        $umid1 = new RilevatoreDiUmidita("2", "qwerty", "100", "gas");

        $impianto -> addRivelatore($umid1);
        $impianto -> addRivelatore($umid);

        $umid = $impianto -> getUmidita($args["id"]);

        $response->getBody()->write(json_encode($umid));
        return $response -> withHeader('Content-Type', 'application/json');
    }

    public function IDumiditaMisurazioni(Request $request, Response $response, $args){
        $impianto = new Impianto("impianto 1", "22.22", "55.55");
        $umid = new RilevatoreDiUmidita("1", "qwerty", "100", "acqua");
        $umid1 = new RilevatoreDiUmidita("2", "qwerty", "100", "gas");

        $umid -> addMisura("12/12/2020", "1000");
        $impianto -> addRivelatore($umid1);
        $impianto -> addRivelatore($umid);


        $umid = $impianto -> getUmidita($args["id"]);

        $response->getBody()->write(json_encode($umid));
        return $response -> withHeader('Content-Type', 'application/json');
    }
}