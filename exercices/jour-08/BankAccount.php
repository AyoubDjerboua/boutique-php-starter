<?php

class Banco
{
    private float $balance;

    public function __construct()
    {
        $this->balance = 0;
    }

    public function deposit(float $amount)
    {
        if ($amount <= 0) {
            return;
        }
        $this->balance += $amount;
    }

    public function withdraw(float $amount)
    {
        if ($amount <= 0) {
            return;
        } elseif ($amount > $this->balance) {
            return;
        } else {
            $this->balance -= $amount;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new Banco;
$account->deposit(100);
$account->withdraw(500);
$account->withdraw(10);

echo 'Argent sur le compte : '.$account->getBalance();
