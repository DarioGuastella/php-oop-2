<!-- ha una categoria (composizione) -->

<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto
{
    public $image;
    public $title;
    public $price;
    public $category;

    public function __construct($image, $title, $price, Category $category)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }
}
