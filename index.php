<?php 

require_once __DIR__ . "/models/food.php";
// require_once __DIR__ . "/models/toy.php";
// require_once __DIR__ . "/models/kennel.php";
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
    public $name;
    public $brand;
    public $price;
    public $avaibility;
    public $type_of_animal;

    function __construct( 
        string $_name,
        string $_brand, 
        int $_price, 
        int $_avaibility,
        Category $_type_of_animal
    ) 
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->avaibility = $_avaibility;
        $this->type_of_animal = $_type_of_animal;
    }
}
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP OOP Extends</title>

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

</head>

<body>
    <section class="container">
        <div class="card m-5" style="width: 18rem;">
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
    </section>

</body>

</html>