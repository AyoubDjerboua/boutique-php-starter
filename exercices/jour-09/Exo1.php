<?php

class Category
{
    private int $id;
    private string $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Product
{
    private string $name;
    private float $price;
    private Category $category; //RELATION !!!!!!!!!!!!!!

    public function __construct($name, $price, $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}


$clothes = new Category(1, "Vêtements");
$tshirt = new Product("T-shirt", 29.99, $clothes);

echo $tshirt->getCategory()->getName(); //"Vêtements"