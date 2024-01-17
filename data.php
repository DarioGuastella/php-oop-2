
<?php

require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cuccia.php';
require_once __DIR__ . '/Models/Gioco.php';

$cats = new Category("Gatti");
$dogs = new Category("Cani");
$cats_card_img = "<img src='https://picsum.photos/id/40/270'>";
$dogs_card_img = "<img src='https://picsum.photos/id/237/270'>";


$prodotti = [
    new Cibo(
        $cats_card_img,
        "Croccantini al tonno",
        "25,00€",
        $cats,
        "Golosi croccantini al tonno, ideali per gatti a pelo lungo",
        "10 Kg",
        "Disponibile"
    ),
    new Cuccia(
        $dogs_card_img,
        "Real Estate 90",
        "80,00€",
        $dogs,
        "Elegante cuccia, ideale per interni.",
        "Color legno, tetto rosso",
        "100x150x90",
        "Non disponibile"
    ),
    new Gioco(
        $cats_card_img,
        "Topolino di gomma",
        "5,00€",
        $cats,
        "Simpatico topolino in gomma, ideale per il tuo amico felino.",
        "Grigio",
        "Disponibile"
    ),
    new Cibo(
        $dogs_card_img,
        "Crocchette al Pollo",
        "50,00€",
        $dogs,
        "Golose crocchette al pollo, ideali per cani di media taglia",
        "25 Kg",
        "Disponibile"
    )
];


// foreach ($prodotti as $value) {
//     if ($value instanceof Cibo || $value instanceof Gioco) {
//         $value->availability = "Si";
//     }
// }
