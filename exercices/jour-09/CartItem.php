
<?php

class CartItem
{
    public function __construct(private Product $product, private int $quantity = 1) {}

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = max(1, $quantity); // OK ALORS, j'ai capté max, en fait ça retourne le plus grand entre 1 et quantity, pour éviter les valeurs négatives ou zéro
    }

    public function increment(): void // fait un +1
    {
        $this->quantity++;
    }

    public function decrement(): void // fait un -1
    {
        $this->quantity = max(1, $this->quantity - 1); // du coup là aussi ça choisit le max entre 1 et this->quantity -1
    }

    public function getTotal(): float // total hein
    {
        return $this->product->getPrice() * $this->quantity;
    }
}
