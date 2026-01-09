<?php

for ($compte = 0; $compte < 10; $compte++) {
    echo "El numero es $compte <br>";
}

for ($comptePair = 2; $comptePair <= 20; $comptePair += 2) {
    echo "El numero es $comptePair <br>";
}

// 3️⃣ Compte à rebours de 10 à 0
echo "<h3>Compte à rebours</h3>";
for ($i = 10; $i >= 0; $i--) {
    echo $i . "<br>";
}

// 4️⃣ Table de multiplication du 7
echo "<h3>Table de multiplication de 7</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "<br>";
}
