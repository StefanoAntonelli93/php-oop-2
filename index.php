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
        <div class="container py-5">
            <div class="row row-cols-4">
                <?php foreach ($Products as $product) : ?>
                    <div class="col">
                        <div class="card bg-secondary-subtle p-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>Nome: <?php echo $product->getName() ?></h3>
                                <p class="card-title">Ingredienti:<?php if ($product->getIngredients() ?? []) : ?>
                                    <?php echo implode(', ', $product->getIngredients()) ?>
                                <?php else : ?>
                                    N/A.
                                <?php endif; ?>
                                </p>
                                <a href="#" class="btn btn-warning w-100">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>