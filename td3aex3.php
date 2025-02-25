<?php

$tableau = array("pomme", "banane", "pomme", "orange", "banane", "pomme", "kiwi", "orange");

echo "Éléments du tableau d'origine : <br>";
print_r($tableau);

$occurrences = array_count_values($tableau);

echo "<br>Nombre d'occurrences des valeurs du tableau :<br>";
print_r($occurrences);

$valeurs_uniques = array_keys($occurrences);

echo "<br>Valeurs uniques présentes dans le tableau d'origine :<br>";
print_r($valeurs_uniques);
?>