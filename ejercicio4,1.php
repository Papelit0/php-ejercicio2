<h1 style="color:brown">Extractor de numeros URL </h1>

<form action="" method="post">
    <label for="frase" style="color:blueviolet;"> Ingrese la URL</label>
    <input type="text" name="url">
    <input type="submit" value="Convertir" name="enviar">
</form>

<?php

function obtenerValores(string $url): array
{

    $valores = [];
    $valor = "";
    $activador = false;
    $letras = explode("&", $url);




    foreach ($letras as $letra) {
        $letras1 = explode("=", $letra);
        if (count($letras1) == 2) {
            $valores[] = $letras1[1];
        }
    }
    return $valores;
}

$resultado = obtenerValores($_POST["url"]);
print_r($resultado);
