<?php
$tableau = array(
    "jean" => "bonbeur",
    "jade" => "ormanger",
    "alex" => "terieur",
    "justin" => "ptitpeu"
);

$element = "bonbeur";

$cle_trouvee = array_search($element, $tableau);

if ($cle_trouvee !== false) {
    echo "La clé de l'élément '$element' est : $cle_trouvee <br>";
} else {
    echo "L'élément '$element' n'a pas été trouvé dans le tableau. <br>";
}
?>