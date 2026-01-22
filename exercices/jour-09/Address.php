<?php

/**
 * @var string $rue
 * @var string $ville
 * @var int $codePostal
 * @var string $pays
 */
class Address
{
    public function __construct(private string $rue, private string $ville, private int $codePostal, private string $pays) {}// constructeur avec les propriétés privées

    public function getRue()// chope la rue
    {
        return $this->rue;// renvoie la rue
    }

    public function getVille()// chope la ville
    {
        return $this->ville;// renvoie la ville
    }

    public function getCodePostal()// chope le code postal
    {
        return $this->codePostal;// renvoie le code postal
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function addAddress() {}
}
