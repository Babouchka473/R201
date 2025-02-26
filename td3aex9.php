<?php
$valeur1 = 15;
$valeur2 = 23;

$maximum = max($valeur1, $valeur2);

$minimum = min($valeur1, $valeur2);

echo "Le maximum entre $valeur1 et $valeur2 est : $maximum <br>";
echo "Le minimum entre $valeur1 et $valeur2 est : $minimum <br>";


$tableau = array(15, 23, 7, 42, 8, 19);

$maximum2 = max($tableau);

$minimum2 = min($tableau);

echo "Le maximum du tableau est : $maximum2 <br>";
echo "Le minimum du tableau est : $minimum2 <br>";

$tableau = array(
    "valeur1" => 15,
    "valeur2" => 23,
    "valeur3" => 7,
    "valeur4" => 42,
    "valeur5" => 8,
    "valeur6" => 19
);

$maximum3 = max($tableau);

$minimum3 = min($tableau);

echo "Le maximum du tableau est : $maximum3 <br>";
echo "Le minimum du tableau est : $minimum3 <br>";
?>