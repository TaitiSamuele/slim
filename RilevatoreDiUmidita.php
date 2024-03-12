<?php
Class RilevatoreDiUmidita extends Rilevatore implements JsonSerializable{ 
    public $posizione;

    public function __construct($id, $codiceSeriale, $misurazioni, $posizione) {
        parent::__construct($id, "%", $codiceSeriale, $misurazioni);
        $this->posizione = $posizione;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'unita di misura' => $this->unitaMisura,
            'soglia' => $this->soglia,
            'codice seriale' => $this->codiceSeriale,
            'misurazini' => $this->misurazioni,
            "posizione" => $this->posizione
        ];
    }
}