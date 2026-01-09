<?php

$stock = 2;
$active = true;
$promoEnDate = "2026-3-19";

if ($stock > 0 && $active = true) {
    echo "Available";
} else {
    echo "Not available";
}

echo "<br>";

$today = date("Y-m-d");
if ($today < $promoEnDate) {
    echo "On promo";
} else {
    echo "No promo";
}
