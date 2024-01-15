<img src="">
<?php

require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cuccia.php';
require_once __DIR__ . '/Models/Gioco.php';

//Creo un array in cui ogni elemento è un'istanza di User
$prodotti = [
    new Cibo(
        '<img src="https://picsum.photos/id/40/270">',
        "Croccantini al tonno",
        "25,00€",
        new Category("Gatti")
    ),
    new Cuccia(
        '<img src="https://picsum.photos/id/237/270">',
        "Cuccia per cani",
        "80,00€",
        new Category("Cani")
    ),
    new Gioco(
        '<img src="https://picsum.photos/id/40/270">',
        "Topolino di gomma",
        "5,00€",
        new Category("Gatti")
    ),
    new Cibo(
        '<img src="https://picsum.photos/id/237/270">',
        "Crocchette al Pollo",
        "50,00€",
        new Category("Cani")
    )
];
//Cibo
$prodotti[0]->description = "Golosi croccantini al tonno, ideali per gatti a pelo lungo";
$prodotti[0]->weight = "10 Kg";

$prodotti[3]->description = "Golose crocchette al pollo, ideali per cani di media taglia";
$prodotti[3]->weight = "25 Kg";

//Cuccia
$prodotti[1]->description = "Elegante cuccia, ideale per interni.";
$prodotti[1]->color = "Color legno, tetto rosso";
$prodotti[1]->size = "100x150x90";

//Gioco
$prodotti[2]->description = "Simpatico topolino in gomma, ideale per il tuo amico felino.";
$prodotti[2]->color = "Grigio";
