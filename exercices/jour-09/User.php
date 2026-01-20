<?php

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
