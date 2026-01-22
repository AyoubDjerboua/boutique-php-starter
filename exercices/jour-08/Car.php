<?php

class Car
{
    // Propriétés (les données)
    private string $brand;

    private string $model;

    private int $year;

    // Constructeur
    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getAge(): int
    {
        $currentYear = date('Y');

        return $currentYear - $this->year;
    }

    public function display()
    {
        return "{$this->brand} {$this->model} (vieille de {$this->getAge()} ans)";
    }
}

$car1 = new Car('Toyota', 'Corolla', 2018);
$car2 = new Car('Peugeot', '208', 2020);
$car3 = new Car('BMW', 'Serie 3', 2015);

echo $car1->display().'<br>';
echo $car2->display().'<br>';
echo $car3->display().'<br>';
