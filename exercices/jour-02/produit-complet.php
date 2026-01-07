<?php
$product = [
    "name" => "Cartable",
    "description" => "Joli cartable bien rouge",
    "price" => 949.99,
    "images" => [
        "https://www.paulmarius.fr/media/catalog/product/c/a/cartable_enfant_ecolier_primaire_scolaire_sac_a_dos_backpack_children_school_pa_9428.jpg", 
        "https://www.paulmarius.fr/media/catalog/product/c/a/cartable_enfant_ecolier_primaire_scolaire_sac_a_dos_backpack_children_school_pa_1eda.jpg",
        "https://www.paulmarius.fr/media/catalog/product/c/a/cartable_enfant_ecolier_primaire_scolaire_sac_a_dos_backpack_children_school_pa_814d.jpg"
    ],
    "sizes" => ["S", "M", "L", "XL"],
    "reviews" => [
        [
        "author" => "John Wick", 
        "rating" => 2, 
        "comment" => "Bords trop ronds"
        ],
        [
        "author" => "Dora", 
        "rating" => 5, 
        "comment" => "Amazing !!!"
        ]
    ]
];

echo "Deuxième image : " . $product["images"][1] . "<br>";
echo "Nombre de tailles disponibles : " . count($product["sizes"]) . "<br>";
echo "Note du premier avis : " . $product["reviews"][0]["rating"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Image 1 : <img src="<?= $product["images"][0] ?>"></p>
    <p>Image 2 : <img src="<?= $product["images"][1] ?>"></p>
    <p>Image 3 : <img src="<?= $product["images"][2] ?>"></p>
</body>
</html>