<?php
    Class Rilevatore{
        protected $id;
        protected $unitaMisura;
        protected $soglia;
        protected $codiceSeriale;
        protected $misurazioni = array();

        public function __construct($id, $unitaMisura, $codiceSeriale, $soglia){   
            $this -> id = $id;
            $this ->unitaMisura = $unitaMisura;
            $this ->soglia = $soglia;
            $this ->codiceSeriale = $codiceSeriale;
        }

        public function addMisura($data, $valore){
            $this ->misurazioni[] = [$data => $valore];
        }

        public function getMisura(){
            return $this -> unitaMisura;
        }

        public function getid(){
            return $this -> id;
        }

        public function getMisurazioni(){
            return $this -> misurazioni;   
        }
        
    }