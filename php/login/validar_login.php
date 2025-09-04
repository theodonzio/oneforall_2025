<?php
session_start();
include("../conexion_bd.php");

// Evitar acceso directo sin formulario
if (!isset($_POST['usuario']) || !isset($_POST['contrasena'])) {
    header("Location: login.php");
    exit();
}

$usuario = $_POST['usuario'];   // Email o cédula
$contrasena = $_POST['contrasena'];

// Buscar usuario en la base de datos
$sql = "SELECT id_usuario, nombre, apellido, contrasena, id_rol FROM Usuario WHERE email = ? OR cedula = ? LIMIT 1";
$sentencia = $conexion->prepare($sql);
$sentencia->bind_param("ss", $usuario, $usuario);
$sentencia->execute();
$sentencia->bind_result($id_usuario, $nombre, $apellido, $contrasena_hash, $id_rol);

if ($sentencia->fetch()) {
    if (password_verify($contrasena, $contrasena_hash)) {
        // Guardar datos en sesión
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nombre']     = $nombre;
        $_SESSION['apellido']   = $apellido;
        $_SESSION['id_rol']     = $id_rol;

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
