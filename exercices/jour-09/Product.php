<?php

class Product //la class Produit hein
{
    private string $name; //le nom de ton produit
    private float $price; //le prix, important quand même
    private Category $category; //RELATION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function __construct($name, $price, $category) //je suis doué en bricolage
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    //GETTEEEEEERS
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
