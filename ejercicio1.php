<?php

/*Fizz – buzz:
Escribe un programa que muestre los números de 1 a 100 (ambos incluidos y con
un salto de línea entre cada impresión), sustituyendo los siguientes:  */

$n = 1;
$f = "fizz";
$b = "bass";

for ($n = 1; $n <= 100; $n++) {

    if ($n % 3 == 0 && $n % 5 == 0) {
        echo "$f - $b" . "<br>";
    } else if ($n % 5 == 0) {
        echo "$b" . "<br>";
    } else if ($n % 3 == 0) {
        echo "$f" . "<br>";
    } else {
        echo "$n" . "<br>";
    }
}



