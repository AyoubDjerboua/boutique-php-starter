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

$catato = new Category(3, "Pomme", "Miam juteux");
$catato2 = new Category(3, "Pomme", "Miam juteux");
$catato3 = new Category(3, "Pomme", "Miam juteux");
$catato4 = new Category(3, "Pomme", "Miam juteux");

echo $catato->getSlug();
