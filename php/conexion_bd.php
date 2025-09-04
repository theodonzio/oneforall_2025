<?php
// Datos de conexión
$servidor      = "dbitsp.tailff9876.ts.net";
$usuario_bd    = "OFA";
$contrasena_bd = "ofametamate";
$base_datos    = "OFA";

// Conectar a la base de datos
$conexion = new mysqli($servidor, $usuario_bd, $contrasena_bd, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Usar UTF-8
$conexion->set_charset('utf8mb4');
?>
