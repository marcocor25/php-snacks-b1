<!-- # Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso
numero più di una volta. -->

<?php

$numbers = [];

while (count($numbers) < 15) {

    $random_numbers = rand(1, 100);

    if (!in_array($random_numbers, $numbers)) {

        array_push($numbers, $random_numbers);
    };
    
};

var_dump($numbers);

?>