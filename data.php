<?php 
    require __DIR__ . "/croccantini.php";
    $products = [
        new Croccantini(
            "Croccantini",
            new Taxonomy("Cibo")
        ),
        new Products(
            "Peluche",
            new Taxonomy("Giochi")
        ),
        new Products(
            "Cucce",
            new Taxonomy("Generico")
           
        ),
        new Products(
            "Guinzaglio",
            new Taxonomy("Attrezzatura")
           
        ),
    ]


?>
