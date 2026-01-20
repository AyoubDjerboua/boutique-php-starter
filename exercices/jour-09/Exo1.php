<?php //commentons vu que j'ai du temps à perdre

class Category //la classe Category hein
{
    private int $id; //la propriété privée $id. Le savais-tu ? Dans les fonctions les variables sont notées des "propriétés". Demande pas pourquoi je sais pas
    private string $name; //name, nom en français, et oui jsuis bilingue

    public function __construct($id, $name) //ici ça construit ta class
    {
        $this->id = $id; //eh
        $this->name = $name; //le nom de ta category
    }

    public function getName() //chope le nom
    {
        return $this->name; //renvoie le nom
    }
}

class Product //la class Produit hein
{
    private string $name; //le nom de ton produit
    private float $price; //le prix, important quand même
    private Category $category; //RELATION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function __construct($name, $price, $category)//je suis doué en bricolage
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}


$clothes = new Category(1, "Vêtements");
$tshirt = new Product("T-shirt", 29.99, $clothes);

echo $tshirt->getCategory()->getName(); //"Vêtements"