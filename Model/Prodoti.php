<?php
require_once __DIR__ . '/Catgoria.php' ;
class Prodotto
{

    private $nome;
    private $prezzo;
    private $quantita;
    private $categoria;

    function __construct($_nome, $_prezzo, $_quantita,Categoria $_categoria)
    {
         $this->nome = $_nome;
         $this->prezzo = $_prezzo;
         $this->quantita = $_quantita;
         $this->categoria = $_categoria;
    }

    public function setnome($nome){
        $this->nome = $nome;
    }

    public function getnome(){
        return $this->nome ;
    }

    public function setprezzo($prezzo){
        $this->prezzo = $prezzo;
    }

    public function getprezzo($prezzo){
        return $this->prezzo ;
    }

    /**
     * Get the value of quantita
     */ 
    public function getcategoria($Categoria)
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setcategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    

    /**
     * Get the value of quantita
     */ 
    public function getQuantita()
    {
        return $this->quantita;
    }

    /**
     * Set the value of quantita
     *
     * @return  self
     */ 
    public function setQuantita($quantita)
    {
        $this->quantita = $quantita;

        return $this;
    }
}