<?php 

require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";
require_once __DIR__ . "/models/kennel.php";
class Category {
    public $type_of_animal;

    function __construct( 
        string $_type_of_animal,   
    )
     {
        $this->type_of_animal = $_type_of_animal;
    }
}
class Product {
    public $brand;
    public $price;
    public $avaibility;
    public $type_of_animal;

    function __construct( 
        string $_brand, 
        int $_price, 
        bool $_avaibility,
        Category $_type_of_animal
    ) 
    {
        $this->brand = $_brand;
        $this->price = $_price;
        $this->avaibility = $_avaibility;
        $this->type_of_animal = $_type_of_animal;
    }
}
// ?>