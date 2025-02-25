<?php

$tableau = array("pomme", "banane", "pomme", "orange", "banane", "pomme", "kiwi", "orange");

echo "Éléments du tableau d'origine :\n";
print_r($tableau);

$occurrences = array_count_values($tableau);

echo "\nNombre d'occurrences des valeurs du tableau :\n";
print_r($occurrences);

$valeurs_uniques = array_keys($occurrences);

echo "\nValeurs uniques présentes dans le tableau d'origine :\n";
print_r($valeurs_uniques);
?>