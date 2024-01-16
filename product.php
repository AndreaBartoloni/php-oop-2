
<?php 


    class Products
    {
        public $name;
        public $category;

        public function __construct($nome, $categoria)
        {
            $this->name = $nome;
            $this->category = $categoria;
        }
        
        public function getProducts()
        {
            $results = $this->name . "," . $this->category;
            return $results;
        }
    }

   

?>