<?php 
    require __DIR__ . "/child/kibble.php";
    require __DIR__ . "/child/peluche.php";
    require __DIR__ . "/child/generic.php";
    require __DIR__ . "/child/equipment.php";



    $products = [
        new Kibble(
            "Croccantini",
            new Taxonomy("Cibo"), 
            "1000 calorie",
            "200 G"
        ),
        new Peluche(
            "Peluche",
            new Taxonomy("Giochi"),
            "Spugna",
            "100 Grammi"
            //"rosso"
        ),
        new Generic(
            "Cucce",
            new Taxonomy("Generico")
           
        ),
        new Equipment(
            "Guinzaglio",
            new Taxonomy("Attrezzatura"),
            "Stoffa",
            "2 Metri",
            //"rosso"
           
        ),
    ]


?>
