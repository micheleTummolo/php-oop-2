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
<body>
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1>
                    Boolshop
                </h1>
            </div>
        </div>
        <div class="row d-flex justify-content-around">
            <?php foreach($products as $product) { ?>
                <div class="col-3">
                    <div class="card card_size">
                        <div class="img_container">
                            <img class="img_size" src="<?php echo $product->image ?>" alt="<?php echo $product->image ?>">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $product->product_name?></h4>
                            <p class="card-text">
                                <span><?php echo $product->category->icon ?></span>
                                <?php echo $product->category->name?>
                            </p>
                            <p class="card-text">
                                Prezzo: &euro;
                                <?php echo $product->price?>
                            </p>
                            
                        </div>
                    </div>
                </div>
                <?php
                    /* echo '<pre>';
                    var_dump($product); */
                ?>
            <?php } ?>
        </div>
    </div>
</body>
</html>