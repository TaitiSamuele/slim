<?php
    Class Rilevatore{
        protected $id;
        protected $unitaMisura;
        protected $soglia;
        protected $codiceSeriale;
        protected $misurazioni = array();

        public function __construct($id, $unitaMisura, $codiceSeriale, $misurazioni){   
            $this -> id = $id;
            $this ->unitaMisura = $unitaMisura;
            $this ->codiceSeriale = $codiceSeriale;
            $this ->soglia = $misurazioni;
        }

        public function addMisura($data, $valore){
            $this ->misurazioni[] = [$data => $valore];
        }
        
    }