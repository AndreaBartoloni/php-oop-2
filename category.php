
<?php 


class Category
{
    public $category;

    public function __construct($categoria)
    {
        $this->category = $categoria;
    }
    
    public function getCategory()
    {
        return $this->category;
        
    }
}



?>