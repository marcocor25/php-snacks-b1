<!-- # Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà
una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra
ospite. Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Virtus Bologna',
        'punti_casa' => 83,
        'punti_ospite' => 88,
    ],
    [
        'casa' => 'Varese',
        'ospite' => 'Cantù',
        'punti_casa' => 74,
        'punti_ospite' => 67,
    ],
    [
        'casa' => 'V.L. Pesaro',
        'ospite' => 'Reyer Venezia',
        'punti_casa' => 85,
        'punti_ospite' => 79,
    ],
    [
        'casa' => 'Fortitudo Bologna',
        'ospite' => 'Virtus Roma',
        'punti_casa' => 69,
        'punti_ospite' => 61,
    ],
    [
        'casa' => 'Mens Sana Siena',
        'ospite' => 'Treviso',
        'punti_casa' => 77,
        'punti_ospite' => 83,
    ],
    [
        'casa' => 'Reggiana',
        'ospite' => 'Trieste',
        'punti_casa' => 78,
        'punti_ospite' => 101,
    ],
    [
        'casa' => 'Juvecaserta',
        'ospite' => 'Stella Azzurra',
        'punti_casa' => 62,
        'punti_ospite' => 76,
    ],
    [
        'casa' => 'Scandone Avellino',
        'ospite' => 'Auxilium Torino',
        'punti_casa' => 102,
        'punti_ospite' => 84,
    ],
    [
        'casa' => 'Dinamo Sassari',
        'ospite' => 'New Basket Brindisi',
        'punti_casa' => 93,
        'punti_ospite' => 89,
    ],
    [
        'casa' => 'Libertas Forlì',
        'ospite' => 'Teramo Basket',
        'punti_casa' => 64,
        'punti_ospite' => 81,
    ],
];


for ($i = 0; $i < count($partite); $i++) {
    echo $partite[$i]['casa'] . " - " . $partite[$i]['ospite'] . " | " . $partite[$i]['punti_casa'] . " - " . $partite[$i]['punti_ospite'];
    echo "<br>";
}

?>