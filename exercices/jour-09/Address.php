<?php


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
