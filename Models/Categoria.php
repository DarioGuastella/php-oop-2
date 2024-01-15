<?php
class Category
{
    public $productType;

    public function __construct($productType)
    {
        $this->productType = $productType;
    }

    public function getItemType()
    {
        $result = $this->productType;
        return $result;
    }
}
