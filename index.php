<?php 
require_once __DIR__ . '/database/db.php';


var_dump($cani);
var_dump($mioGatto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">

        </h2>
        <div class="row row-cols-3">
            <?php foreach ($catalogo as $prodotto){ ?>
                <div class="col">
                    <div class="card-body">
                        <h4><?php echo $prodotto->getnome() ?></h4>
                    </div>
                    <div>
                        <?php if(is_a($prodotto, 'Cibo')) {?>
                        <p> <?php echo $prodotto->getGusto(); ?></p>
                        <?php } else if (is_a($prodotto, 'Giocatolo')) {?>
                            <p> <?php echo $prodotto->getMateriale() ?></p>
                            
                       <?php } ?>
                     
                    </div>
                </div>
           <?php } ?>
          
        </div>
    </div>
</body>
</html>
