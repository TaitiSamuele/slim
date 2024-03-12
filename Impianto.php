<?php

class Impianto implements JsonSerializable
{
    protected $nome;
    protected $latitudine;
    protected $longitudine;

    protected $dispositivoDiAllarme = array();
    protected $rilevatore = array();

    public function __construct($nome, $latitudine, $longitudine)
    {
        $this->nome = $nome;
        $this -> latitudine = $latitudine;
        $this -> longitudine = $longitudine;
    }

    public function addAllarme($allarme){
        array_push($this-> dispositivoDiAllarme, $allarme);
    }
    public function addRivelatore($rilevatore){
        array_push($this->rilevatore, $rilevatore);
    }
    
    public function getDispositiviDiAllarme(){
        return $this -> dispositivoDiAllarme;
    }

    public function getDispositiviPressione(){
        $dispositivi = array();
        foreach ($this -> rilevatore as $disp){
            if($disp instanceof RilevatoreDiPressione){
                $dispositivi[] = $disp;
            }

        }
        return $dispositivi;
    }

    public function getDispositiviUmidita(){
        $dispositivi = array();
        foreach ($this -> rilevatore as $disp){
            if($disp instanceof RilevatoreDiUmidita){
                $dispositivi[] = $disp;
            }

        }
        return $dispositivi;
    }

    public function getAllarme($id){
        foreach($this -> dispositivoDiAllarme as $all){
            if($all ->getId() == $id){
                return $all;
            }
        }
    }
    public function getpressione($id){
        $dispositivi = $this -> getDispositiviPressione();
        foreach($dispositivi as $disp){
            if($disp ->getId() == $id){
                return $disp;
            }
        }
    }

    public function getUmidita($id){
        $dispositivi = $this -> getDispositiviUmidita();

        foreach($dispositivi as $disp){
            if($disp ->getId() == $id){
                return $disp;
            }
        }
    }
    
    public function jsonSerialize(){
        return [
            'nome' => $this->nome,
            'latitudine' => $this->latitudine,
            'longitudine' => $this->longitudine,
        ];
    }
}
