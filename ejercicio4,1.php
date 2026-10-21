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
    $url = "";
    if(isset($_POST["enviar"])){
        $url = $_POST["url"];
}

$resultado = obtenerValores("url") ;
print_r($resultado);
