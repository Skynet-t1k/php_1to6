<?php
// 1. Lunghezza minima 8 caratteri
// 2. Deve contenere almenu un numero
// 3. Deve contenere almeno una lettera maiuscola
// 4. Deve contenere almeno un carattere speciale


const SPECIALCHARS = [
    '!', '@', '#', '$', '%', '^', '&', '*', '(', ')',
    '-', '_', '=', '+', '[', ']', '{', '}', '\\', '|',
    ';', ':', '\'', '"', ',', '.', '<', '>', '/', '?'
];

do {
    $password = readline("Inserisci una password: ");
} while (!checkPassword($password));


//Funzione che verifica lunghezza password
function stringLength($pwd)
{
    if (strlen($pwd) >= 8) {
        echo 'Password maggiore di 8 caratteri' . "\n";
        return true;
    } else {
        echo 'Inserire una password di almeno 8 caratteri' . "\n";
        return false;
    };
};

//Funzione che verifica se almeno un numero e'contenuto nella password
function checkNumber($pwd)
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (is_numeric($pwd[$i])) {
            echo 'Password contiene almeno un numero' . "\n";
            return true;
        };
    }
    echo 'Password deve contenere almeno un numero' . "\n";
    return false;
};

//Funzione che verifica se almeno una lettera maiuscola e'contenuta nella password
function upperCaseCheck($pwd)
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (ctype_upper($pwd[$i])) {
            echo 'Password contiene almeno una lettera maiuscola' . "\n";
            return true;
        };
    }
    echo 'Password deve contenere almeno una lettera maiuscola' . "\n";
    return false;
}

//Funzione che verifica se almeno una lettera maiuscola e'contenuta nella password
function specialCharCheck($pwd)
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (in_array($pwd[$i], SPECIALCHARS)) {
            echo 'Password contiene almeno un carattere speciale' . "\n";
            return true;
        };
    }
    echo 'Password deve contenere almeno un carattere speciale' . "\n";
    return false;
}

//Funzione che controlla se tutte le richieste sono soddisfatte
function checkPassword($pwd)
{
    $strlength = stringLength($pwd);
    $checknum =  checkNumber($pwd);
    $uppercheck = upperCaseCheck($pwd);
    $specialchcheck = specialCharCheck($pwd);
    if ($strlength && $checknum && $uppercheck && $specialchcheck) {
        echo 'Password rispetta i canoni richiesti' . "\n";
        return true;
    } else {
        echo 'Password da rivedere' . "\n";
        return false;
    };
}
