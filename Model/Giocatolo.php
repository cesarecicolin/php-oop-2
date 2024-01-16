<?php
require_once __DIR__ . '/Prodoti.php';
class Giocattolo extends Prodotto
{
    private $materiale;

    function __construct($_nome, $_prezzo, $_quantita,Categoria $_categoria,$_materiale)
    {
        parent:: __construct($_nome, $_prezzo, $_quantita, $_categoria);
        $this->materiale=$_materiale;
    }
    

    /**
     * Get the value of materiale
     */ 
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Set the value of materiale
     *
     * @return  self
     */ 
    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;

        return $this;
    }
}