
<?php 


class Taxonomy
{
    public $categorie;

    public function __construct($categoria)
    {
        $this->categorie = $categoria;
    }
    
    public function getCategory()
    {
        return $this->categorie;
        
    }
}



?>