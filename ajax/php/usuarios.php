<?php
header('Content-type: application/json; charset=utf-8');

$respuesta = [
    [
        'id' => "65546434t5635643524",
        'nombre' => 'Miguel',
        'edad' => 33,
        'pais' => 'México',
        'correo'=>'correo@ejemplo.com'
    ],
    [
        'id' => "65546434t5635643524",
        'nombre' => 'Juan',
        'edad' => 22,
        'pais' => 'Colombia',
        'correo'=>'juan@ejemplo.com'
    ]
];

echo json_encode($respuesta);


//echo '[{"nombre":"Miguel"},{"nombre":"Carlos"}]';