<?php

class Alunno implements JsonSerializable
{
    protected $nome;
    protected $cognome;
    protected $eta;

    public function __construct($nome = "ciao", $cognome = "ciao", $eta = "0")
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    public function getEta()
    {
        return $this->eta;
    }
    public function setEta($eta)
    {
        $this->eta = $eta;
    }

    public function jsonSerialize()
    {
        return [
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'eta' => $this->eta
        ];
    }

    public function __toString()
    {
        $string = "alunno: $this->nome $this->cognome $this->eta<br>";
        return $string;
    }
}
