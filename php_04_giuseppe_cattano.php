<?php
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

//  $users = [
//   ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
// ];


//Pushate su Github chiamando la repository php_02_nome_cognome. Integra anche gli altri esercizi e poi pusha tutto.
//secondo il aulab questo e'l'esercizio n.4


$users = [
    ['name' => 'Giuseppe', 'surname' => 'Cattano', 'gender' => 'M'],
    ['name' => 'Debora', 'surname' => 'Amode', 'gender' => 'F'],
    ['name' => 'Skynet', 'surname' => 'Terminator', 'gender' => 'NA'],
];

foreach ($users as $user) {
    if ($user['gender'] == 'M') {
        echo ("Buongiorno Sig. " . $user['name'] . ' ' . $user['surname'] . "\n");
    } elseif ($user['gender'] == 'F') {
        echo ("Buongiorno Sig.ra " . $user['name'] . ' ' . $user['surname'] . "\n");
    } else {
        echo ("Buongiorno " . $user['name']  . ' ' .  $user['surname'] . "\n");
    }
};
