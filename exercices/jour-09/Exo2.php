<?php

class Category
{
    public function __construct(private int $id, private string $name) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Product
{
    public function __construct(
        private int $id,
        private string $name,
        private float $price,
        private Category $category
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }
}

class CartItem
{
    public function __construct(
        private Product $product,
        private int $quantity = 1
    ) {}

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
        $this->quantity = max(1, $quantity);
    }

    public function increment(): void
    {
        $this->quantity++;
    }

    public function decrement(): void
    {
        $this->quantity = max(1, $this->quantity - 1);
    }

    public function getTotal(): float
    {
        return $this->product->getPrice() * $this->quantity;
    }
}

class Cart
{
    /** @var CartItem[] */
    private array $items = [];

    public function addProduct(Product $product, int $quantity = 1): void
    {
        $id = $product->getId();

        if (isset($this->items[$id])) {
            $this->items[$id]->setQuantity(
                $this->items[$id]->getQuantity() + $quantity
            );
        } else {
            $this->items[$id] = new CartItem($product, $quantity);
        }
    }

    public function removeProduct(int $productId): void
    {
        unset($this->items[$productId]);
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }

        return $total;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function clear(): void
    {
        $this->items = [];
    }
}

class User
{
    public function __construct(private string $name, private string $email, private string $dateInscription) {}

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getDate()
    {
        return $this->dateInscription;
    }
}

class Address
{
    public function __construct(private string $rue, private string $ville, private int $codePostal, private string $pays) {}

    public function getRue()
    {
        return $this->rue;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function addAddress() {}
}

$userTablo = [
    ['Paolo'],
];

$food = new Category(1, 'Alimentation');
$sport = new Category(2, 'Sport');

$product1 = new Product(1, 'Ballon', 15.99, $sport);
$product2 = new Product(2, 'Beignet', 2.50, $food);

$item1 = new CartItem($product1, 2);
$item2 = new CartItem($product2);

$item1->increment(); // 3
$item2->increment(); // 2
$item2->decrement(); // 1

echo $item1->getProduct()->getName().' : '.$item1->getQuantity().' = '.$item1->getTotal().' €<br>';
echo $item2->getProduct()->getName().' : '.$item2->getQuantity().' = '.$item2->getTotal().' €<br>';
