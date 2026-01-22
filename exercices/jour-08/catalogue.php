<?php

class Product
{
    private string $name;

    private float $price;

    private int $stock;

    public function __construct(string $name, float $price, int $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock;
    }
}
$products = [
    new Product('Ballon', 15.99, 65),
    new Product('Beignet', 2.50, 28545),
    new Product('Bateau', 0.3, 1),
    new Product('Or', 129.26, 122),
    new Product('Dylan', 4000, 1),
];

$coutTotal = 0;

foreach ($products as $product) {
    echo $product->getName().'<br>';
    echo number_format($product->getPrice(), 2, ',', ' ').'€ <br>';
    echo $product->getStock().' en stock <br><br>';
    $coutTotal += $product->getPrice() * $product->getStock();
}

echo 'La valeur de tous les produits est de : '.number_format($coutTotal, 2, ',', ' ').'€';
