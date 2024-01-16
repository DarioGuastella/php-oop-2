<!--  è un tipo di prodotto quindi import require_once prodotto
figlio di prodotto, quindi prodotto extends -->

<?php

require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{
    public $description;
    public $weight;

    public function __construct($image, $title, $price, Category $category, $description, $weight)
    {
        parent::__construct($image, $title, $price, $category);
        $this->description = $description;
        $this->weight = $weight;
    }
}
