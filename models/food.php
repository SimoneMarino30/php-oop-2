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

// var_dump($dog_food);
// var_dump($cat_food);
?>


<div class="card m-2" style="width: 18rem;">
    <img src="<?= $dog_food->image ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title"><?= $dog_food->name ?></h3>
        <h5 class="card-title"><?= $dog_food->brand ?></h5>
        <ul>
            <li class="card-text">
                Prezzo: <?= $dog_food->price ?>€
            </li>
            <li class="card-text">
                Disponibilità: <?= $dog_food->avaibility ?> pezzi
            </li>
            <li class="card-text">
                Categoria: ...<?= $dog_food->avaibility ?>
            </li>
        </ul>


        <a href="#" class="btn btn-primary">
            <span>Acquista ora</span>
            <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </div>
</div>

<div class="card m-2" style="width: 18rem;">
    <img src="<?= $cat_food->image ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title"><?= $cat_food->name ?></h3>
        <h5 class="card-title"><?= $cat_food->brand ?></h5>
        <ul>
            <li class="card-text">
                Prezzo: <?= $cat_food->price ?>€
            </li>
            <li class="card-text">
                Disponibilità: <?= $cat_food->avaibility ?> pezzi
            </li>
            <li class="card-text">
                Categoria: ...<?= $cat_food->avaibility ?>
            </li>
        </ul>


        <a href="#" class="btn btn-primary">
            <span>Acquista ora</span>
            <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </div>
</div>