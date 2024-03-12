<?php

class Impianto implements JsonSerializable
{
    protected $nome;
    protected $latitudine;
    protected $longitudine;

    protected $DispositivoDiAllarme = array();
    protected $Rilevatore = array();

    public function __construct()
    {
        $this->nome = "impianto 1";
        $this -> latitudine = "22.22";
        $this -> longitudine = "55.55";


    }
    
    
    
    public function jsonSerialize(){}
}
