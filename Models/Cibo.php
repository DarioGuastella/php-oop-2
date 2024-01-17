<!--  è un tipo di prodotto quindi import require_once prodotto
figlio di prodotto, quindi prodotto extends -->

<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Disponibilità.php';

class Cibo extends Prodotto
{
    public $description;
    public $weight;
    use Disponibilità;

    public function __construct($image, $title, $price, Category $category, $description, $weight, $availability)
    {
        parent::__construct($image, $title, $price, $category);
        $this->description = $description;
        $this->weight = $weight;
        $this->availability = $availability;
    }
}
