<?php 

require_once __DIR__ . '/../product.php';
require __DIR__ . '/../traits.php';

class Kibble extends Products
{
    
    public $calories;
    public $grams;
    use Color;


    public function __construct($name, Taxonomy $category, $calorie, $grammi)
    {
        parent::__construct($name, $category);

        $this->calories = $calorie;
        $this->grams = $grammi; 
    }
}



?> 