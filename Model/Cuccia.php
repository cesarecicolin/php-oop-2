<?php 

require_once __DIR__ . '/Prodoti.php';
class Cuccia extends Prodotto
{ private $grandeza;

    function __construct($_nome, $_prezzo, $_quantita,Categoria $_categoria,$_grandeza)
    {
        parent:: __construct($_nome, $_prezzo, $_quantita, $_categoria);
        $this->grandeza=$_grandeza;
    }

/**
 * Get the value of grandeza
 */ 
public function getGrandeza()
{
return $this->grandeza;
}

/**
 * Set the value of grandeza
 *
 * @return  self
 */ 
public function setGrandeza($grandeza)
{
$this->grandeza = $grandeza;

return $this;
}
}