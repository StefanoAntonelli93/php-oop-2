<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
// richiamo array
require_once __DIR__ . '/models/Array_Products.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <header>
        <div class="content p-3 bg-warning ">
            <div class="row justify-content-between text-align-center">
                <div class="col-3">
                    <h1 class="fw-bold">
                        Boonimal Shop
                    </h1>
                </div>
                <div class="col-3 align-self-center">
                    <input type="text"> icona
                </div>
                <div class="col-3 align-self-center text-end">Accedi o Registrati</div>
            </div>
            <ul class="d-flex justify-content-between p-3 list-unstyled fs-5">
                <li>Cane</li>
                <li>Gatto</li>
                <li>Piccoli Animali</li>
                <li>Brand</li>
                <li>Magazine</li>
                <li class="text-danger">Promozioni</li>
            </ul>
        </div>
    </header>
    <!-- main -->
    <main>
        <h2 class="fw-bold p-3">Cibo</h2>
        <div class="container py-5">
            <div class="row row-cols-4">
                <?php foreach ($foods as $food) : ?>
                    <div class="col">
                        <div class="card bg-secondary-subtle p-4 h-100">
                            <img src="" class="card-img-top" alt="img">
                            <div class="card-body">
                                <h3 class="fs-5"><?php echo $food->getCategory()?->getIcon() ?></h3>
                                <h3 class="mb-4"><?php echo $food->getName() ?></h3>
                                <div><?php echo $food->getPrice() ?> &euro;</div>
                                <p class="card-title">Ingredienti:<?php if ($food->getIngredients() ?? []) : ?>
                                    <?php echo implode(', ', $food->getIngredients()) ?>
                                <?php else : ?>
                                    N/A.
                                <?php endif; ?>
                                </p>
                                <a href="#" class="btn btn-warning w-100"><i class="fa-solid fa-cart-shopping me-2"></i>Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <h2 class="fw-bold p-3">Giochi</h2>
        <div class="container py-5">
            <div class="row row-cols-4">
                <?php foreach ($foods as $food) : ?>
                    <div class="col">
                        <div class="card bg-secondary-subtle p-4 h-100">
                            <img src="" class="card-img-top" alt="img">
                            <div class="card-body">
                                <h3 class="fs-5"><?php echo $food->getCategory()?->getIcon() ?></h3>
                                <h3 class="mb-4"><?php echo $food->getName() ?></h3>
                                <div><?php echo $food->getPrice() ?> &euro;</div>

                                <p class="card-title">Ingredienti:<?php if ($food->getIngredients() ?? []) : ?>
                                    <?php echo implode(', ', $food->getIngredients()) ?>
                                <?php else : ?>
                                    N/A.
                                <?php endif; ?>
                                </p>
                                <a href="#" class="btn btn-warning w-100"><i class="fa-solid fa-cart-shopping me-2"></i>Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    <footer class="bg-warning p-4 text-center">
        <h5>
            Powered by Stefano
        </h5>
    </footer>
</body>

</html>