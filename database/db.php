<?php require_once __DIR__ . '/../Model/Catgoria.php';
 require_once __DIR__ . '/../Model/Cibo.php';
 require_once __DIR__ . '/../Model/Giocatolo.php';
 require_once __DIR__ . '/../Model/Cuccia.php';

$cani = new Categoria('fa-solid fa-dog', 'cani');
$gatti = new Categoria('fa-solid fa-cat', 'gatti');

$mioGatto = new Cibo('mioGatto',3,50,$gatti,'pesce');

$catalogo = [
    new Cibo('per Gatto', 3, 60,$gatti,'pesce'),
    new Cibo('per cane', 3, 60,$cani,'pesce'),
    new Giocattolo('topolino',10,20,$gatti,'tessuto'),
    new Giocattolo('osso',10,20,$cani,'ossa'),
    new Cuccia('cuccia',35,10,$cani,'xl'),
    new Cuccia('cuccia',45,10,$gatti,'m')
];

