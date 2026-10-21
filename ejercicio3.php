<?php

declare(strict_types=1);
$personas = [
    [
        "usuario" => "papelito",
        "correo" => "papelito@email.com",
        "edad" => 26,
        "servicio" => [
            "estado" => true,
            "cuota" => 20_000
        ]
    ],
    [
        "usuario" => "nomofeliz",
        "correo" => "nomofeliz@email.com",
        "edad" => 23,
        "servicio" => [
            "estado" => true,
            "cuota" => 65_000
        ]
    ],
    [
        "usuario" => "mpatarroyo",
        "correo" => "mpatarroyo@email.com",
        "edad" => 29,
        "servicio" => [
            "estado" => false,
            "cuota" => 10_000
        ]
    ],
    [
        "usuario" => "miguelinf",
        "correo" => "miguelinf@email.com",
        "edad" => 17,
        "servicio" => [
            "estado" => true,
            "cuota" => 90_000
        ]
    ],
    [
        "usuario" => "jahi300",
        "correo" => "jahi300@email.com",
        "edad" => 25,
        "servicio" => [
            "estado" => false,
            "cuota" => 30_000
        ]
    ]
];

foreach ($personas as $persona) {
    $validacion = ($persona["servicio"]["estado"]) ? "Usuario activo" : "Usuario inactivo";
?>  
    <ul class="lista">
        <li>
            <p><span>Usuario es:</span> <?php echo $persona["usuario"] ?></p>
        </li>
         <p><span>Eedad:</span><?php echo $persona["edad"] ?></p>
        <p><span>Plan de:</span> : <?php echo $persona["servicio"]["cuota"] ?> </p>
        <p><span>Disponibilidad:</span> <?php echo $validacion ?>
        </p>
        <br>
    </ul>
    <style>
        .lista p {
            color: blueviolet;
        }

        .lista span {
            color: red;
        }
    </style>
<?php

}
