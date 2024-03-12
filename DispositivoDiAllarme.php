<?php
Class DispositivoDiAllarme{
    protected $id;
    protected $numeroDiTelefono;

    public function __construct($id){
        $this->id = $id;
        $this->numeroDiTelefono = "555555555";
    }
}