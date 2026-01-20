<?php

class Category //la classe Category hein
{
    private int $id; //la propriété privée $id. Le savais-tu ? Dans les fonctions les variables sont notées des "propriétés". Demande pas pourquoi je sais pas
    private string $name; //name, nom en français, et oui jsuis bilingue

    public function __construct($id, $name) //ici ça construit ta class
    {
        $this->id = $id; //eh
        $this->name = $name; //le nom de ta category
    }

    //GETTEEEEERS
    public function getId() //chope lui son id
    {
        return $this->id; //crenvoie, so, nni===id
    }

    public function getName() //chope le nom
    {
        return $this->name; //renvoie le nom
    }
}
