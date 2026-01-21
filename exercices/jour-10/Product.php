<?php

class Product //la class Produit hein
{
    private int $id;
    private string $name; //le nom de ton produit
    private float $price; //le prix, important quand même
    private Category $category; //RELATION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function __construct($id, $name, $price, $category) //je suis doué en bricolage
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    //GETTEEEEEERS
    public function getId()
    {
        return $this->id;
    }

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
