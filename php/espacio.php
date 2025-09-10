<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ofav4</title>

  <!-- Bootstrap y estilos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
      <a href="#" class="nav-link active">
        <img src="../img/icons/home_icon.png" class="icono">
        Inicio
      </a>
    </li>
    <li><a href="#" class="nav-link link-light"><img src="../img/icons/timetable_icon.png" class="icono"> Horarios</a></li>
    <li><a href="#" class="nav-link link-light"><img src="../img/icons/space_icon.png" class="icono"> Espacios</a></li>
    <li><a href="#" class="nav-link link-light"><img src="../img/icons/teach_icon.png" class="icono"> Docentes</a></li>

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
<div class="clase principal cuadrado">
  <div class="cuadrado">
    <div class="simbolo"></div>
  </div>
</div>

</body>
</html>