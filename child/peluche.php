<?php 
    require_once __DIR__ . '/../product.php';
    require_once __DIR__ . '/../traits.php';

    
    class Peluche extends Products
    {
        use Color;
        public $material;
        public $weight;

        public function __construct($name, Taxonomy $category, $materiale, $peso)
        {
            parent::__construct($name, $category);
    
            $this->material = $materiale;
            $this->weight = $peso; 
        }
    }
    


?>