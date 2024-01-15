
<?php 


    class Products
    {
        public $name;

        public function __construct($nome)
        {
            $this->name = $nome;
        }
        
        public function getProducts()
        {
            $results = $this->name;
            return $results;
        }
    }

   

?>