<?php
    include __DIR__.'/../model/categoria.php';
    include __DIR__.'/../model/prodotto.php';
    include __DIR__.'/../model/cibo.php';
    include __DIR__.'/../model/gioco.php';
    include __DIR__.'/../model/accessorio.php';

    // Array delle categorie
    $categories = [
        'cane' => new Categoria ('cane', '<i class="fa-solid fa-dog"></i>'),
        'gatto' => new Categoria ('gatto', '<i class="fa-solid fa-cat"></i>'),
        'pesce' => new Categoria ('pesce', '<i class="fa-solid fa-fish"></i>'),
        'uccello' => new Categoria('uccello', '<i class="fa-solid fa-dove"></i>'),
    ];

    $products = [
        new Cibo ('Fresh Kisses', 20.50, 'https://images.unsplash.com/photo-1604544203292-0daa7f847478?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80', $categories['cane'], 10, ['Pollo', 'Manzo']),
        new Accessorio ('Cuccia per cani', 40.50, 'https://m.media-amazon.com/images/I/71-tsDiw8iL._AC_SY355_.jpg', $categories['cane'], 'Poliestere', 'Medium',),
        new Gioco ('Fishbox Gioco per gatti', 10.50, 'https://petmarket.it/17066-large_default/gimcat-pesciolini-assortiti.jpg', $categories['gatto'], 'Medium', 'Con catnip'),
    ]
?>