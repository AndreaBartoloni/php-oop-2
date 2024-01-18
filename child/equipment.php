<?php 

require_once __DIR__ . '/../product.php';


    class Equipment extends Products
    {
        use Color;
        public $material;
        public $length;

      
        public function __construct($name, Taxonomy $category, $materiale, $lunghezza)
        {
            parent::__construct($name, $category);

            $this->material = $materiale;
            $this->length = $lunghezza; 
        }
    }


?>