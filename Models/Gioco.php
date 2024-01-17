<!--  è un tipo di prodotto quindi import require_once prodotto
figlio di prodotto, quindi prodotto extends -->

<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Disponibilità.php';
class Gioco extends Prodotto
{
    public $description;
    public $color;
    use Disponibilità;

    public function __construct($image, $title, $price, Category $category, $description, $color,  $availability = null)
    {
        parent::__construct($image, $title, $price, $category);
        $this->description = $description;
        $this->color = $color;
        $this->availability = $availability;
    }
}
