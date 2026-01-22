<?php

class Cart
{
    /** @var CartItem[] */
    private array $items = []; // tableau vide qui contiendra les produits du panier

    // AFFICHAGE DES ITEMS DU TABLEAU
    public function getItems(): array // permet de récupérer les items du panier
    {
        return $this->items; // retourne le tableau items
    }

    /**
     * Ajoute un produit (objet de la classe Product) au panier
     * Si le produit existe déjà, augmente sa quantité
     */
    public function addProduct(Product $product, int $quantity = 1): void
    {
        $id = $product->getId(); // Récupère l'ID unique du produit (méthode de la classe Product)

        if (isset($this->items[$id])) { // IF Produit déjà dans le panier
            $currentQuantity = $this->items[$id]->getQuantity(); // Chope la quantité via CartItem
            $this->items[$id]->setQuantity($currentQuantity + $quantity); // Augmenter la quantité
        } else {
            // Nouveau produit
            $this->items[$id] = new CartItem($product, $quantity);
        }
    }

    /**Remove un produit du panier à partir de son ID */
    public function removeProduct(int $productId): void
    {
        unset($this->items[$productId]);
    }

    /** Met à jour la quantité d'un produit déjà présent dans le panier */
    public function update(int $productId, int $quantity): void
    {
        if (isset($this->items[$productId])) { // IF produit déjà présent dans le panier
            $this->items[$productId]->setQuantity($quantity); // on set la quantity
        }
    }

    /** Calcule le total du panier (prix x quantité pour chaque CartItem) */
    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) { // Parcourt chaque CartItem du panier
            $total += $item->getTotal();
        }

        return $total;
    }

    /** Retourne le nombre de produits différents dans le panier */
    public function count(): int
    {
        return count($this->items);
    }

    /** Clear le panier */
    public function clear(): void
    {
        $this->items = [];
    }
}
