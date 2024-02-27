<?php

class Classe implements JsonSerializable
{
    protected $classe;
    protected $alunni;

    public function __construct($classe)
    {
        $this->classe = $classe;
        $this->alunni = array(
            new Alunno("aa", "aaaa", "1"),
            new Alunno("bb", "bbbb", "2")
        );
    }

    public function addAlunno(Alunno $a)
    {
        $this->alunni[] = $a;
    }

    public function isSetAlunno($alunno)
    {
        foreach ($this->alunni as $a) {
            if ($a->getNome() == $alunno)
                return true;
        }
        return false;
    }

    public function getAlunno($alunno)
    {
        foreach ($this->alunni as $a) {
            if ($a->getNome() == $alunno)
                return $a;
        }
        return null;
    }

    public function jsonSerialize()
    {
        return [
            'classe' => $this->classe,
            'alunni' => $this->alunni
        ];
    }

    public function __toString()
    {
        $string = "";
        foreach ($this->alunni as $value) {
            $string .= "<br>" . $value->__toString();
        }

        return $string;
    }
}
