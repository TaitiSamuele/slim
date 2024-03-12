<?php
Class RilevatoreDiPressione extends Rilevatore{
    protected $tipologia;
    public function __construct($id, $codiceSeriale, $misurazioni, $tipologia) {
        parent::__construct($id, "bar", $codiceSeriale, $misurazioni);
        $this->tipologia = $tipologia;
    }
}