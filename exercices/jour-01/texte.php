<?php

$brand = "Nike";
$model = "Air Max";

echo "Chaussures " . $brand . " " . $model . "<br>"; //Concaténation
echo "Chaussures $brand $model<br>";//Interpolation


//Sprintf
$text = sprintf("Chaussures %s %s", 
$brand, 
$model
);

echo $text;