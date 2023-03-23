<?php
class Toy extends Product  {
    public $image;
    public $color;
   
    function __construct(
        string $_name,
        string $_brand, 
        int $_price, 
        bool $_avaibility,
        Category $_type_of_animal, 
        string $_image,
        string $_color
    ) 
    {
        parent::__construct($_name, $_brand, $_price, $_avaibility, $_type_of_animal);
        $this->image = $_image;
        $this->color = $_color;
    }
}

$dog_toy = new Toy ("Palla squared", "Royal Canin", 5, true, new Category("dog"), "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRKsAUlRUPGHZ-4PssF5pHkSgWjhNNanB7BOnFMveLFSNrkqN9utw6UqChmMUZh0d73vtC2gG8_aXoFVCAkZq4ObzxmZQ_0wuNVum6nOCGR0zdLxFCKtrQu&usqp=CAE",  "Assortiti");
$cat_toy = new Toy ("Topolino radiocomandato", "Felix", 15, true, new Category("cat"), "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61kdZyggFRL._AC_SS450_.jpg", "grigio");

// var_dump($dog_toy);
// var_dump($cat_toy);

// ?>

<div class="card m-2" style="width: 18rem;">
    <img src="<?= $dog_toy->image ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title"><?= $dog_toy->name ?></h3>
        <h5 class="card-title"><?= $dog_toy->brand ?></h5>
        <ul>
            <li class="card-text">
                Prezzo: <?= $dog_toy->price ?>€
            </li>
            <li class="card-text">
                Disponibilità: <?= $dog_toy->avaibility ?> pezzi
            </li>
            <li class="card-text">
                Categoria: ...<?= $dog_toy->avaibility ?>
            </li>
            <li class="card-text">
                Colori: <?= $dog_toy->color ?>
            </li>
        </ul>


        <a href="#" class="btn btn-primary">
            <span>Acquista ora</span>
            <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </div>
</div>

<div class="card m-2" style="width: 18rem;">
    <img src="<?= $cat_toy->image ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title"><?= $cat_toy->name ?></h3>
        <h5 class="card-title"><?= $cat_toy->brand ?></h5>
        <ul>
            <li class="card-text">
                Prezzo: <?= $cat_toy->price ?>€
            </li>
            <li class="card-text">
                Disponibilità: <?= $cat_toy->avaibility ?> pezzi
            </li>
            <li class="card-text">
                Categoria: ...<?= $cat_toy->avaibility ?>
            </li>
            <li class="card-text">
                Colore: <?= $cat_toy->color ?>
            </li>
        </ul>


        <a href="#" class="btn btn-primary">
            <span>Acquista ora</span>
            <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </div>
</div>