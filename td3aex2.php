<!DOCTYPE html>
<html lang='fr'>
    <head>

    </head>
    <body>

    <?php

    $ages = array('Mathilde' => 18, 'Pierre' => 18, 'Amandine' => 7, 'Charle' => 12, 'Theo' => 20);
    foreach($ages as $key => $value) {
        echo $value."</br>";
    }
    echo "<pre>";
    print_r(array_count_values($ages));
    echo "</pre>";
    ?> 



    </body>
</html>