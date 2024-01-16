<!--  è un tipo di prodotto quindi import require_once prodotto
figlio di prodotto, quindi prodotto extends -->

<?php

require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto
{
    public $description;
    public $color;

    public function __construct($image, $title, $price, Category $category, $description, $color)
    {
        parent::__construct($image, $title, $price, $category);
        $this->description = $description;
        $this->color = $color;
    }
}
