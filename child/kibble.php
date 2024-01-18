<?php 

require_once __DIR__ . '/../product.php';

class Kibble extends Products
{
    
    public $calories;
    public $grams;
    


    public function __construct($name, Taxonomy $category, $calorie, $grammi)
    {
        parent::__construct($name, $category);

        $this->calories = $calorie;
        $this->grams = $grammi; 
    }
}



?> 