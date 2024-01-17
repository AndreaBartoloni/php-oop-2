<?php 
    require_once __DIR__ . '/../product.php';
    class Peluche extends Products
    {
        use Color;
        public $material;
        public $weight;
    }


?>