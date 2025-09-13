<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Docentes - OFAV4</title>

  <!-- Bootstrap y estilos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">

  <!-- Fuente Montserrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="d-flex">
<!-- Barra lateral -->
<div class="barra-lateral d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px;">
  <div class="logo">
      <img src="../img/ofalogos/fulltextpositivo.png" id="logo-barra">
  </div>

  <ul class="nav nav-pills flex-column mb-auto">
    <p>General</p>
    <li class="nav-item">
      <a href="index.html" class="nav-link link-light">
        <img src="../img/icons/home_icon.png" class="icono">
        Inicio
      </a>
    </li>
    <li><a href="#" class="nav-link link-light"><img src="../img/icons/timetable_icon.png" class="icono"> Horarios</a></li>
    <li><a href="#" class="nav-link link-light"><img src="../img/icons/space_icon.png" class="icono"> Espacios</a></li>
    <li><a href="docentes.html" class="nav-link active"><img src="../img/icons/teach_icon.png" class="icono"> Docentes</a></li>

    <p class="mt-3">Herramientas</p>
    <li><a href="#" class="nav-link link-light"><img src="../img/icons/inbox_icon.png" class="icono"> Mensajes</a></li>
    <li><a href="#" class="nav-link link-light"><img src="../img/icons/alert_icon.png" class="icono"> Alertar</a></li>
    <li><a href="#" class="nav-link link-light"><img src="../img/icons/config_icon.png" class="icono"> Configuración</a></li>

  <p class="mt-3">Account</p>
    <li>
      <a href="../php/login/login.php" class="nav-link link-light">
        <img src="../img/icons/maleuser_icon.png" class="icono">
        Login
      </a>
    </li>
    <li>
      <a href="#" class="nav-link link-light">
        <img src="../img/icons/exit_icon.png" class="icono">
        Salir
      </a>
    </li>
  </ul>
</div>

<!-- Contenido principal -->
<main class="flex-grow-1 p-4" style="height: 100vh; overflow-y: auto; color: white;">
    <h1 class="mb-4">Docentes</h1>

    <!-- Botón para agregar nuevo docente -->
    <div class="mb-4">
      <button class="btn btn-primary" onclick="agregarDocente()">Agregar Docente</button>
    </div>

    <!-- Grilla de docentes -->
    <div class="row" id="lista-docentes">
      <!-- Ejemplo de docente -->
      <div class="col-md-4 mb-4">
        <div class="tarjeta-docente p-3 text-center">
          <img src="../img/docentes/profesor1.jpg" class="foto-docente mb-3" alt="Foto Docente">
          <h5>Juan Pérez</h5>
          <p><strong>Materia:</strong> Matemáticas</p>
          <p><strong>Sexo:</strong> Masculino</p>
          <p><strong>Edad:</strong> 40 años</p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="tarjeta-docente p-3 text-center">
          <img src="../img/docentes/profesora1.jpg" class="foto-docente mb-3" alt="Foto Docente">
          <h5>María González</h5>
          <p><strong>Materia:</strong> Historia</p>
          <p><strong>Sexo:</strong> Femenino</p>
          <p><strong>Edad:</strong> 35 años</p>
        </div>
      </div>
    </div>
</main>

<!-- JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script src="../js/app.js"></script>
</body>
</html>
