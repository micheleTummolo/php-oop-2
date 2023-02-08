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
        new Cibo ('Natural Trainer', 40.49, 'https://m.media-amazon.com/images/I/811-pzgqf8L._AC_UL480_FMwebp_QL65_.jpg', $categories['cane'], 12000, ['Manzo', 'Riso']),
        
        new Accessorio ('Cuccia per cani', 18.95, 'https://m.media-amazon.com/images/I/61zzS-X4OJL._AC_UL480_FMwebp_QL65_.jpg', $categories['cane'], 'Cotone polipropilene', 'Small',),
        
        new Cibo ('Donath', 5.49, 'https://m.media-amazon.com/images/I/51ML9l8EwKL._AC_UL480_FMwebp_QL65_.jpg', $categories['uccello'], 1000, ['Fiocchi d\'avena', 'Frumento']),

        new Gioco ('Fishbox Gioco per gatti', 10.50, 'https://petmarket.it/17066-large_default/gimcat-pesciolini-assortiti.jpg', $categories['gatto'], 'Medium', 'Con catnip'),

        new Cibo ('TetraMin Flakes', 7.49, 'https://m.media-amazon.com/images/I/81CdIElbDBL._AC_UL480_FMwebp_QL65_.jpg', $categories['pesce'], 500, ['Cereali', 'Lieviti', 'Molluschi', 'Crostacei']),

        new Cibo ('Natural Trainer', 22.99, 'https://m.media-amazon.com/images/I/41UtWlXKNrL._AC_UL480_FMwebp_QL65_.jpg', $categories['gatto'], 3000, ['Tacchino']),

        new Accessorio ('Mini pompa dell\'acqua (600 L/H, 10 W)', 12.65, 'https://m.media-amazon.com/images/I/71fWSXYjHKL._AC_UL480_FMwebp_QL65_.jpg', $categories['pesce'], 'Plastica', 'Small',),

        new Gioco ('Vitakraft Giocattolo a Forma di Elefante in Peluche per Cani', 5.50, 'https://m.media-amazon.com/images/I/81opVo0H6UL._AC_UL480_FMwebp_QL65_.jpg', $categories['cane'], 'small', 'Morbido'),

        new Accessorio ('Yaheetech Gabbia Voliera per Uccelli', 42.99, 'https://m.media-amazon.com/images/I/81C7G1aySXL._AC_UL480_FMwebp_QL65_.jpg', $categories['uccello'], 'Metallo', 'Medium',),

        new Accessorio ('Acquario Tetra Starter Line LED 54 l', 147.09, 'https://m.media-amazon.com/images/I/81ZSq-sMksL._AC_UL480_FMwebp_QL65_.jpg', $categories['pesce'], 'Vetro', 'Large',),
    ]
?>