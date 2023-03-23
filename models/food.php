<?php 
class Food extends Product  {
    public $image;
   
    function __construct( 
        string $_name,
        string $_brand, 
        int $_price, 
        int $_avaibility,
        Category $_type_of_animal, 
        string $_image
    ) 
    {
        parent::__construct($_name, $_brand, $_price, $_avaibility, $_type_of_animal);
        $this->image = $_image;
    }
}

$dog_food = new Food ("Crocchette di pollo", "Royal Canin", 50, 33, new Category("dog"), "https://www.globalpet.it/983-large_default/royal-canin-cane-secco-medium-adult.jpg");
$cat_food = new Food ("Filetto di pesce", "Purina", 50, 24, new Category("cat"), "https://www.tecnoagricolamodena.it/3388-thickbox_default/gourmet-gatto-perle-piaceri-del-mare-con-pesce-dell-oceano-e-gamberetti-85-gr.jpg");

var_dump($dog_food);
var_dump($cat_food);
?>