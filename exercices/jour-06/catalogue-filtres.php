<?php
$products = [
    ['name' => 'T-shirt Rouge', 'price' => 20, 'category' => 'Vêtements', 'inStock' => true],
    ['name' => 'Jean Bleu', 'price' => 40, 'category' => 'Vêtements', 'inStock' => false],
    ['name' => 'Pull Vert', 'price' => 35, 'category' => 'Vêtements', 'inStock' => true],
    ['name' => 'Chaussures Noires', 'price' => 60, 'category' => 'Chaussures', 'inStock' => true],
    ['name' => 'Baskets Blanches', 'price' => 50, 'category' => 'Chaussures', 'inStock' => false],
    ['name' => 'Casquette', 'price' => 15, 'category' => 'Accessoires', 'inStock' => true],
    ['name' => 'Sac à dos', 'price' => 45, 'category' => 'Accessoires', 'inStock' => true],
    ['name' => 'Ceinture', 'price' => 25, 'category' => 'Accessoires', 'inStock' => false],
    ['name' => 'Robe Rouge', 'price' => 55, 'category' => 'Vêtements', 'inStock' => true],
    ['name' => 'Sandales', 'price' => 30, 'category' => 'Chaussures', 'inStock' => true],
    ['name' => 'Écharpe', 'price' => 18, 'category' => 'Accessoires', 'inStock' => true],
    ['name' => 'T-shirt Noir', 'price' => 22, 'category' => 'Vêtements', 'inStock' => false],
    ['name' => 'Jean Noir', 'price' => 42, 'category' => 'Vêtements', 'inStock' => true],
    ['name' => 'Baskets Noires', 'price' => 55, 'category' => 'Chaussures', 'inStock' => true],
    ['name' => 'Chapeau', 'price' => 20, 'category' => 'Accessoires', 'inStock' => false],
];

$search = $_GET['search'] ?? '';
$category = $_GET['category'] ?? '';
$maxPrice = $_GET['maxPrice'] ?? '';
$inStockOnly = isset($_GET['inStock']);

$filteredProducts = array_filter($products, function ($product) use ($search, $category, $maxPrice, $inStockOnly) {
    if ($search && stripos($product['name'], $search) === false) {
        return false;
    }
    if ($category && $product['category'] !== $category) {
        return false;
    }
    if ($maxPrice && $product['price'] > $maxPrice) {
        return false;
    }
    if ($inStockOnly && ! $product['inStock']) {
        return false;
    }

    return true;
});
?>

<form method="GET">
    <input type="text" name="search" placeholder="Recherche par nom" value="<?= htmlspecialchars($search) ?>">

    <select name="category">
        <option value="">Toutes les catégories</option>
        <option value="Vêtements" <?= $category === 'Vêtements' ? 'selected' : '' ?>>Vêtements</option>
        <option value="Chaussures" <?= $category === 'Chaussures' ? 'selected' : '' ?>>Chaussures</option>
        <option value="Accessoires" <?= $category === 'Accessoires' ? 'selected' : '' ?>>Accessoires</option>
    </select>

    <input type="number" name="maxPrice" placeholder="Prix max" value="<?= htmlspecialchars($maxPrice) ?>">

    <label>
        <input type="checkbox" name="inStock" <?= $inStockOnly ? 'checked' : '' ?>> En stock uniquement
    </label>

    <button type="submit">Filtrer</button>
</form>


<?php if (count($filteredProducts) > 0) { ?>
    <ul>
        <?php foreach ($filteredProducts as $product) { ?>
            <li>
                <?= htmlspecialchars($product['name']) ?> -
                <?= $product['price'] ?> € -
                <?= $product['category'] ?> -
                <?= $product['inStock'] ? 'En stock' : 'Rupture' ?>
            </li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p>Aucun produit trouvé.</p>
<?php } ?>