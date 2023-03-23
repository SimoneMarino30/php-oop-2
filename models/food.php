<?php 
class Food extends Product  {
    public $meat;
   
    function __construct( 
        string $_brand, 
        int $_price, 
        bool $_avaibility,
        Category $_type_of_animal, 
        string $_meat
    ) 
    {
        parent::__construct($_brand, $_price, $_avaibility, $_type_of_animal);
        $this->meat = $_meat;
    }
}

$dog_food = new Food ("Royal Canin", 50, true, new Category("dog"), "chicken");
$cat_food = new Food ("Felix", 50, true, new Category("cat"), "fish");

var_dump($dog_food);
var_dump($cat_food);
?>