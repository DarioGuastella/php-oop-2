<?php
class Category
{
    private $productType;

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
