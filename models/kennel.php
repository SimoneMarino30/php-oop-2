<?php 
class Kennel extends Product  {
    public $material;
    public $size;
   
    function __construct(
        string $_brand, 
        int $_price, 
        bool $_avaibility,
        Category $_type_of_animal, 
        string $_material,
        string $_size
    ) 
    {
        parent::__construct($_brand, $_price, $_avaibility, $_type_of_animal);
        $this->material = $_material;
        $this->size = $_size;
    }
}

$dog_kennel = new Toy ("Royal Canin", 100, true, new Category("dog"), "legno",  "xl");
$cat_kennel = new Toy ("Felix", 75, true, new Category("cat"), "wool", "md");

var_dump($dog_kennel);
var_dump($cat_kennel);
?>