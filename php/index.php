<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ofav4</title>
  <!--links de librerias de bootstrap y link a css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <!--links de los fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  </head>

  <body class="d-flex">
<!--sider-->
<div class="sidebar-wrapper d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px;">

<div class="logo">
    <img src="/img/ofalogos/fulltextpositivo.png" id="sidebarlogo">
</div>

<ul class="nav nav-pills flex-column mb-auto">
  <p>General</p>
  <li class="nav-item">
    <a href="#" class="nav-link active" aria-current="page">
      <img src="/img/icons/home_icon.png" class="_icon">
      Inicio
    </a>
  </li>
  <li>
    <a href="#" class="nav-link link-light">
      <img src="/img/icons/timetable_icon.png" class="_icon">
      Horarios
    </a>
  </li>
  <li>
    <a href="#" class="nav-link link-light">
      <img src="/img/icons/space_icon.png" class="_icon">
      Espacios
    </a>
  </li>
  <li>
    <a href="#" class="nav-link link-light">
      <img src="/img/icons/teach_icon.png" class="_icon">
      Docentes
    </a>
  </li>

  <p class="mt-3">Tools</p>
  <li>
    <a href="#" class="nav-link link-light">
      <img src="/img/icons/inbox_icon.png" class="_icon">
      Mensajes
    </a>
  </li>
    <li>
    <a href="#" class="nav-link link-light">
      <img src="/img/icons/alert_icon.png" class="_icon">
      Alertar
    </a>
  </li>
  <li>
    <a href="#" class="nav-link link-light">
      <img src="/img/icons/config_icon.png" class="_icon">
      Configuración
    </a>
  </li>

  <p class="mt-3">Account</p>
    <li>
    <a href="#" class="nav-link link-light">
      <img src="/img/icons/maleuser_icon.png" class="_icon">
      Perfil
    </a>
  </li>
      <li>
    <a href="#" class="nav-link link-light">
      <img src="/img/icons/exit_icon.png" class="_icon">
      Salir
    </a>
  </li>
</ul>

</div>

<main class="flex-grow-1 p-4" style="background-color: #f8f9fa; height: 100vh; overflow-y: auto;">
    <h1>Bienvenido, Thiago</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste ipsum aut illum earum soluta officia, expedita nihil assumenda vitae corrupti et, pariatur officiis, aliquid laborum suscipit unde tenetur alias! Voluptas.</p>
<div class="widgets">
  <!-- Reloj -->
  <div class="widget-card reloj">
      <p class="fecha"></p>
      <p class="tiempo"></p>
  </div>

  <!-- Calendario -->
  <div class="widget-card" id="calendario"></div>
</div>
</main>

  <!-- Bootstrap Bundle JS (dropdown y tooltip) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous" ></script>

  <!-- Inicialización de tooltips -->
  <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));
  </script>

  <script src="/js/app.js"></script>
</body>
</html>