<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include __DIR__ .'/database/db.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<header class="bg-info">
    <div class="container">
        <div class="row mb-4">
            <div class="col py-1">
                <h1 class="fw-bold">
                    Boolshop
                </h1>
            </div>
        </div>
    </div>
</header>
<body>
    <div class="container">
        <div class="row mb-1">
            <div class="col">
                <h4>
                   I nostri prodotti
                </h4>
            </div>
        </div>
        <div class="row d-flex flex-wrap">
            <?php foreach($products as $product) { ?>
                <div class="col-3 mb-4">
                    <div class="card card_size">
                        <div class="img_container pt-3 px-2">
                            <img class="img_size" src="<?php echo $product->image ?>" alt="<?php echo $product->image ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?php echo $product->product_name?></h5>
                            <p class="card-text">
                                <span><?php echo $product->category->icon ?></span>
                                <?php echo $product->category->name?>
                            </p>
                            <p class="card-text">
                                Prezzo: &euro;
                                <?php echo $product->price?>
                            </p>
                            <?php if(get_class($product) == 'Cibo') { ?>
                                <p class="card-text">
                                    Peso netto: 
                                    <?php echo $product->weight?>
                                    g
                                </p>
                                <p class="card-text">
                                    Ingredienti: 
                                    <?php echo implode(', ', $product->ingredients) ?>
                                </p>
                            <?php } ?>
                            <?php if(get_class($product) == 'Accessorio') { ?>
                                <p class="card-text">
                                    Materiale: 
                                    <?php echo $product->material?>
                                </p>
                                <p class="card-text">
                                    Dimensioni: 
                                    <?php echo $product->size ?>
                                </p>
                            <?php } ?>
                            <?php if(get_class($product) == 'Gioco') { ?>
                                <p class="card-text">
                                    Caratteristiche: 
                                    <?php echo $product->features?>
                                </p>
                                <p class="card-text">
                                    Dimensioni: 
                                    <?php echo $product->size ?>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>