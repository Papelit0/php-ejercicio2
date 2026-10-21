<h1 style="color:brown">Conversor de texto hacker </h1>

<form action="" method="post">
    <label for="frase" style="color:blueviolet;"> Ingrese la frase</label>
    <input type="text" name="frase">
    <input type="submit" value="Convertir" name="enviar">
</form>


<?php

$dicc = [
"a" => "4",
"b" => "I3",
"c" => "[",
"d" => ")",
"e" => "3",
"f" => "|=>",
"g" => "&",
"h" => "#",
"i" => "1",
"j" => ",_|",
"k" => ">|",
"l" => "1",
"m" => "/\\/\\",
"n" => "^/",
"o" => "0",
"p" => "|*",
"q" => "(_,)",
"r" => "I2",
"s" => "5",
"t" => "7",
"u" => "(_)",
"v" => "\/",
"w" => "\/\/",
"x" => "><",
"y" => "j",
"z" => "2",
" " => " "
];
$frase = $_POST["frase"];
$frase = strtolower($frase);
$convers = str_split($frase);
foreach($convers as $conver){
    echo "$dicc[$conver]";
}

