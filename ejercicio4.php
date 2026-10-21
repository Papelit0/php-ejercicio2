<h1 style="color:brown">Extractor de numeros URL </h1>

<form action="" method="post">
    <label for="frase" style="color:blueviolet;"> Ingrese la URL</label>
    <input type="text" name="url">
    <input type="submit" value="Convertir" name="enviar">
</form>

<?php
function obtenerValores(string $url) {
    $valores = [];
    $valor = "";
    $activador = false;
    $letras = str_split($url);

    for ($i = 0; $i < count($letras); $i++) {
        $z = $letras[$i];

        if ($z == "=") {
            $activador = true;
            $valor = "";
        } elseif ($z == "&") {
            if ($activador) {
                $valores[] = $valor;
            }
            $activador = false;
        } elseif ($activador) {
            $valor = $valor . $z;
        }
    }

    if ($activador) {
        $valores[] = $valor;
    }

    return $valores;
}

$url = $_POST["url"];
$resultados = obtenerValores($url);

$n = 1;
foreach ($resultados as $resultado) {
    echo "<p>Valor " . $n . ": " . $resultado . "</p>";
    $n++;
}
?>