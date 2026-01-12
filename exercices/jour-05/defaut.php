<?php


function formatPrice($amount, $currency = "€", $decimals = 2)
{
    $formatedNumber = number_format($amount, $decimals, '.', ' ');
    return $formatedNumber . ' ' . $currency;
}

echo formatPrice(213) . "<br>"; //PHP_EOL permet de faire un saut de ligne équivalent à un br
echo formatPrice(213, "$") . "<br>";
echo formatPrice(213, "€", 0) . "<br>";
