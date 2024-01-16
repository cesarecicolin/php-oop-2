<?php 

require_once __DIR__ . '/Prodoti.php';
class Cibo extends Prodotto
{ private $gusto;

    function __construct($_nome, $_prezzo, $_quantita,Categoria $_categoria,$_gusto)
    {
        parent:: __construct($_nome, $_prezzo, $_quantita, $_categoria);
        $this->gusto=$_gusto;
    }


/**
 * Get the value of gusto
 */ 
public function getGusto()
{
return $this->gusto;
}

/**
 * Set the value of gusto
 *
 * @return  self
 */ 
public function setGusto($gusto)
{
$this->gusto = $gusto;

return $this;
}
};
   