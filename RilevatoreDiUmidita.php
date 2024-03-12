<?php
Class RilevatoreDiUmidita extends Rilevatore{
    public $posizione;

    public function __construct($id, $codiceSeriale, $misurazioni, $posizione) {
        parent::__construct($id, "%", $codiceSeriale, $misurazioni);
        $this->posizione = $posizione;
    }
}