<?php

class User
{
    // Propriétés (les données)
    public string $name;

    public string $email;

    public string $registrationDate;

    // Constructeur
    public function __construct(string $name, string $email, ?string $registrationDate = null) //    Le ? avant string indique que la valeur peut être de type string ou null
    {
        $this->name = $name;
        $this->email = $email;

        if ($registrationDate === null) {
            $this->registrationDate = date('Y-m-d');
        } else {
            $this->registrationDate = $registrationDate;
        }
    }

    public function isNewMember(): bool
    {
        $registrationTimestamp = strtotime($this->registrationDate);
        $currentTimestamp = time();
        $daysSinceRegistration = ($currentTimestamp - $registrationTimestamp) / (60 * 60 * 24);

        return $daysSinceRegistration < 30;
    }
}

$user1 = new User('Alice', 'alice@email.com');
$user2 = new User('Bob', 'bob@email.com', '2025-12-20');

echo $user1->name.' est nouveau ? '.($user1->isNewMember() ? 'Oui' : 'Non').'<br>';
echo $user2->name.' est nouveau ? '.($user2->isNewMember() ? 'Oui' : 'Non').'<br>';
