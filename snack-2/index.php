<!-- # Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso
negato”. -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if ((strlen($name) > 3) && (strpos($mail, '@')) && (strpos($mail, '.', -4)) && ((is_numeric($age)))) {
    echo 'Accesso riuscito! ✔️';
} else {
    echo 'Accesso negato! 🚫';
}

?>