<?php

class Product
{
    private int $id;
    private string $name;
    private string $description;
    private float $price;
    private int $stock;
    private string $category;

    public function __construct(int $id, string $name, string $description, float $price, int $stock, string $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->category = $category;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getPriceIncludingTax(float $vat = 20)
    {
        return $this->price *= (1 + $vat / 100); //return price TTC
    }

    public function isInStock(): bool
    {
        return $this->stock > 0; //return true si le stock est supérieur à 0        
    }

    public function reduceStock(int $quantity)
    {
        return $this->stock -= $quantity;
    }

    public function applyDiscount(float $percentage) //en entier hein, genre 20 pas 0,2 
    {
        return $this->price -= ($this->price * ($percentage / 100));
    }
}


$product = new Product(1, "Parpaing", "Solide sur les appuis", 29.99, 13, "Construction");


echo number_format($product->getPriceIncludingTax(), 2, ',', ' ') . "€ <br>"; //affiche le prix de l'objet
echo $product->isInStock() ? "Produit en stock <br>" : "Produit hors-stock <br>";

$stockActuel = $product->getStock();
echo "Stock actuel : " . $stockActuel . "<br>";

$reductStock = $product->reduceStock(6);
echo "Réduction de stock, nouveau stock : $reductStock <br>";

$discountedPrice = $product->applyDiscount(20);
echo "Prix en promo : " . number_format($discountedPrice, 2, ',', ' ') . "€ <br>";
