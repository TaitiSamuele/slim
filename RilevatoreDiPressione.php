<?php
class RilevatoreDiPressione extends Rilevatore implements JsonSerializable
{
    protected $tipologia;
    public function __construct($id, $codiceSeriale, $tipologia, $soglia)
    {
        parent::__construct($id, "bar", $codiceSeriale, $soglia);
        $this->tipologia = $tipologia;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'unita di misura' => $this->unitaMisura,
            'soglia' => $this->soglia,
            'codice seriale' => $this->codiceSeriale,
            'misurazini' => $this->misurazioni,
            "tipologia" => $this->tipologia
        ];
    }
}
