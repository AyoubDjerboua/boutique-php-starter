<?php

require_once 'Product.php';

class ProductRepository
{
    public function __construct(private PDO $pdo) {}

    // Récupérer un produit par son id
    public function find(int $id): ?Product
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id = ?');
        $stmt->execute([$id]);
        $data = $stmt->fetch();

        return $data ? $this->hydrate($data) : null;
    }

    // Récupérer tous les produits
    public function findAll(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM products');
        $results = $stmt->fetchAll();

        return array_map([$this, 'hydrate'], $results);
    }

    // Transforme un tableau de la DB en objet Product
    private function hydrate(array $data): Product
    {
        return new Product(
            id: (int) $data['id'],
            name: $data['name'],
            price: (float) $data['price'],
            stock: (int) $data['stock']
        );
    }

    // CREATE
    public function save(Product $product): void
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO products (name, price, stock) VALUES (?, ?, ?)'
        );
        $stmt->execute([
            $product->getName(),
            $product->getPrice(),
            $product->getStock(),
        ]);
    }

    // UPDATE
    public function update(Product $product): void
    {
        $stmt = $this->pdo->prepare(
            'UPDATE products SET name = ?, price = ?, stock = ? WHERE id = ?'
        );
        $stmt->execute([
            $product->getName(),
            $product->getPrice(),
            $product->getStock(),
            $product->getId(),
        ]);
    }

    // DELETE
    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare('DELETE FROM products WHERE id = ?');
        $stmt->execute([$id]);
    }
}
