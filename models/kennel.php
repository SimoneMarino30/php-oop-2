<?php 
class Kennel extends Product  {
    public $image;
    public $size;
   
    function __construct(
        string $_name,
        string $_brand, 
        int $_price, 
        int $_avaibility,
        Category $_type_of_animal, 
        string $_image,
        string $_size
    ) 
    {
        parent::__construct($_name, $_brand, $_price, $_avaibility, $_type_of_animal);
        $this->image = $_image;
        $this->size = $_size;
    }
}

$dog_kennel = new Kennel ("Cuccia per cani", "Royal Canin", 100, 10, new Category("dog"), "https://www.original-legno.it/public/foto-NORMALE/000113-3.jpg",  "xl");
$cat_kennel = new Kennel ("Cuccia per gatti", "Felix", 75, true, new Category("cat"), "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTtCbtcDb4Z4aYCuycZhGJWXzLooV0bNxsbp0alvrA6-qgmfOPfst0OKgQ4Qwcgu7oGQoWhw3m6nCTNr852Y_reK4pZ90w6xg6MZfPBdhdOUoq0CNmBybUc&usqp=CAE", "md");

// var_dump($dog_kennel);
// var_dump($cat_kennel);
?>


<div class="card m-2" style="width: 18rem;">
    <img src="<?= $dog_kennel->image ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title"><?= $dog_kennel->name ?></h3>
        <h5 class="card-title"><?= $dog_kennel->brand ?></h5>
        <ul>
            <li class="card-text">
                Prezzo: <?= $dog_kennel->price ?>€
            </li>
            <li class="card-text">
                Disponibilità: <?= $dog_kennel->avaibility ?> pezzi
            </li>
            <li class="card-text">
                Categoria: ...<?= $dog_kennel->avaibility ?>
            </li>
            <li class="card-text">
                Size: <?= $dog_kennel->size?>
            </li>
        </ul>


        <a href="#" class="btn btn-primary">
            <span>Acquista ora</span>
            <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </div>
</div>

<div class="card  m-2" style="width: 18rem;">
    <img src="<?= $cat_kennel->image ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title"><?= $cat_kennel->name ?></h3>
        <h5 class="card-title"><?= $cat_kennel->brand ?></h5>
        <ul>
            <li class="card-text">
                Prezzo: <?= $cat_kennel->price ?>€
            </li>
            <li class="card-text">
                Disponibilità: <?= $cat_kennel->avaibility ?> pezzi
            </li>
            <li class="card-text">
                Categoria: ...<?= $cat_kennel->avaibility ?>
            </li>
            <li class="card-text">
                Size: <?= $cat_kennel->size?>
            </li>
        </ul>


        <a href="#" class="btn btn-primary">
            <span>Acquista ora</span>
            <i class="fa-solid fa-cart-arrow-down"></i>
        </a>
    </div>
</div>