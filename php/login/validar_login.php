<?php
session_start();
include("conexion_bd.php"); // $conn ahora existe correctamente

// Evitar acceso directo
if (!isset($_POST['usuario']) || !isset($_POST['contrasena'])) {
    header("Location: login.php");
    exit();
}

$usuario = trim($_POST['usuario']);      // Limpiar espacios
$contrasena = trim($_POST['contrasena']);

// Preparar consulta
$sql = "SELECT id_usuario, nombre, apellido, contrasena, id_rol 
        FROM Usuario 
        WHERE email = ? OR cedula = ? 
        LIMIT 1";

$sentencia = $conn->prepare($sql);
if (!$sentencia) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$sentencia->bind_param("ss", $usuario, $usuario);
$sentencia->execute();
$resultado = $sentencia->get_result();

if ($fila = $resultado->fetch_assoc()) {
    // Comparar contraseña en texto plano
    if ($contrasena === $fila['contrasena']) {
        $_SESSION['id_usuario'] = $fila['id_usuario'];
        $_SESSION['nombre']     = $fila['nombre'];
        $_SESSION['apellido']   = $fila['apellido'];
        $_SESSION['id_rol']     = $fila['id_rol'];

        header("Location: ../index.php");
        exit();
    } else {
        header("Location: login.php?error=Contraseña incorrecta");
        exit();
    }
} else {
    header("Location: login.php?error=Usuario no encontrado");
    exit();
}
?>