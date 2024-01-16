
<?php 
    require __DIR__ . "/Taxonomy.php";

    class Products
    {
        public $name;
        public $category;

        public function __construct($nome, Taxonomy $categorie)
        {
            $this->name = $nome;
            $this->category = $categorie;
        }
        
        public function getProducts()
        {
            $results = $this->name;
            return $results;
        }
    }

   

?>