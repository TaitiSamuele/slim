<?php
Class DispositivoDiAllarme implements JsonSerializable{
    protected $id;
    protected $numeroDiTelefono;

    public function __construct($id){
        $this->id = $id;
        $this->numeroDiTelefono = "555555555";
    }

    public function getId(){
        return $this->id;   
    }

    public function jsonSerialize(){
        return [
            'id' => $this->id,
            'numero di telefono' => $this->numeroDiTelefono
        ];
    }
}