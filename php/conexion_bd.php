<?php
$servername = "dbitsp.tailff9876.ts.net"; // host del servidor MySQL
$username   = "OFA";               // usuario MySQL
$password   = "ofametamate";              // contraseña
$database   = "OFA";                      // nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("❌ Conexión fallida: " . $conn->connect_error);
}
echo "✅ Conexión exitosa a la base de datos";
?>
