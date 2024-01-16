<?php 
    require __DIR__ . "/child/kibble.php";
    require __DIR__ . "/child/peluche.php";
    require __DIR__ . "/child/generic.php";
    require __DIR__ . "/child/equipment.php";



    $products = [
        new Kibble(
            "Croccantini",
            new Taxonomy("Cibo")
        ),
        new Peluche(
            "Peluche",
            new Taxonomy("Giochi")
        ),
        new Generic(
            "Cucce",
            new Taxonomy("Generico")
           
        ),
        new Equipment(
            "Guinzaglio",
            new Taxonomy("Attrezzatura")
           
        ),
    ]


?>
