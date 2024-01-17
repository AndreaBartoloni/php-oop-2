<?php 
    require_once __DIR__ . '/../product.php';
    require_once __DIR__ . '/../traits.php';
    class Peluche extends Products
    {
        use Color;
        public $material;
        public $weight;
    }


?>