<?php

class Category
{
    private int $id;
    private string $nom;
    private string $description;

    public function __construct($id, $nom, $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function getSlug()
    {
        $slug = strtolower($this->nom); //met en minuscule le nom
        $slug = str_replace(' ', '-', $slug); //remplace les espaces par des -

        return $slug;
    }
}

$catato = new Category(1, "Pomme d'amour", "Miam juteux");
$catato2 = new Category(2, "Poire au chocolat", "Miam granuleux");
$catato3 = new Category(3, "Caramel au sucre", "Miam diabète");

echo $catato->getSlug() . "<br>";
echo $catato2->getSlug() . "<br>";
echo $catato3->getSlug() . "<br>";
