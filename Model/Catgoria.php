<?php
class Categoria 
{
    private $icon;
    private $nome;

    function __construct($_icon, $_nome)
    {
        $this->nome = $_nome;
        $this->icon = $_icon;
    }

    public function setIcon($_icon){
        $this->icon = $_icon;
    }

    public function getIcon($_icon){
        return $this->icon ;
    }

    public function setnome($_nome){
        $this->nome = $_nome;
    }

    public function getnome($_nome){
       return $this->nome ;
    }

}