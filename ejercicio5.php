<h1 style="color:brown">Detector de Viernes 13</h1>

<form action="" method="post">
    <label for="mes">Mes (1-12):</label>
    <input type="number" name="mes" id="mes">

    <label for="anio">Año:</label>
    <input type="number" name="anio" id="anio">

    <input type="submit" value="Verificar" name="enviar">
</form>

<?php
function viernesSi(int $mes, int $anio): bool
{
    $fecha = new DateTime("$anio-$mes-13");
    return $fecha->format("w") == 5;
}

if (isset($_POST["enviar"])) {
    $mes  = (int) ($_POST["mes"] ?? 0);
    $anio = (int) ($_POST["anio"] ?? 0);

    if ($mes < 1 || $mes > 12 || $anio < 1) {
        echo "<p>Ingresa un el mes y el año.</p>";
    } else {
        if (viernesSi($mes, $anio)) {
            echo "<p>Sí, el 13/$mes/$anio es viernes 13.</p>";
        } else {
            echo "<p>No, el 13/$mes/$anio no es viernes 13.</p>";
        }
    }
}
?>