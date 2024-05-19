<?php
// Date le seguenti variabili:

// $1text = "Marco";  la variabile non puo' iniziare con un numero
$text1 = "Marco ";
$text2 = "hai ";
// $text.3 = "sete"; il putno non va bene
$text3 = "sete ";
$text4 = "? ";
// @text5 = "Perchè"; la dichiarazione della variabile si fa con il $
$text5 = "Perchè ";
// $te-xt6 = '$text2'; niente dash solo underscore e per usare la variabile $text2 dobbiamo usare doppi apici ""
$text6 = "$text2 ";
// $text 7 = 'bevuto'; niente spazi
$text7 = 'bevuto ';
$text8 = "tutto.";

// correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“
// per evitare di concatenare molti spazi vuoti ho aggiunto uno spazio vuoto nel contenuto delle variabili

echo ($text1 . $text2 . $text3 . $text4 . $text5 . $text6 . $text7 . $text8);
// quando salvo l'intellisense mi rimuove '? >' automaticamente.boh