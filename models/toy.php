<?php
class Toy extends Product  {
    public $type;
    public $color;
   
    function __construct(
        string $_brand, 
        int $_price, 
        bool $_avaibility,
        Category $_type_of_animal, 
        string $_type,
        string $_color
    ) 
    {
        parent::__construct($_brand, $_price, $_avaibility, $_type_of_animal);
        $this->type = $_type;
        $this->color = $_color;
    }
}

$dog_toy = new Toy ("Royal Canin", 5, true, new Category("dog"), "pallina",  "red");
$cat_toy = new Toy ("Felix", 15, true, new Category("cat"), "Topo meccanico", "grigio");

var_dump($dog_toy);
var_dump($cat_toy);

// ?>