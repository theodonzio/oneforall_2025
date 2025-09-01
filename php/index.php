<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>ofav4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="d-flex">

<div class="sidebar-wrapper d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px;">

  <a href="/" class="d-flex align-items-center justify-content-center text-decoration-none">
    <img src="/img/ofalogos/fulltextpositivo.png" id="sidebarlogo">
  </a>

  <ul class="nav nav-pills flex-column mb-auto">
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
        <img src="/img/icons/inbox_icon.png" class="_icon">
        Mensajes
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
    <li>
      <a href="#" class="nav-link link-light">
        <img src="/img/icons/config_icon.png" class="_icon">
        Configuración
      </a>
    </li>
  </ul>

  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://m.media-amazon.com/images/I/51V+1wd2dFL.jpg" alt="User avatar" width="32" height="32" class="rounded-circle me-2">
      <strong>Thiago Zabala</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">Perfil</a></li>
        <li><a class="dropdown-item" href="#">Idioma</a></li>
        <li><a class="dropdown-item" href="#" id="exit_user"><img src="/img/icons/exit_icon.png" class="_icon">Salir</a></li>
      </ul>
  </div>
</div>


<main class="flex-grow-1 p-4" style="background-color: #f8f9fa; height: 100vh; overflow-y: auto;">
    <h1>Bienvenido, Thiago</h1>
    <p>Este es el contenido principal. Podés empezar a agregar tus dashboards, tarjetas, estadísticas o cualquier funcionalidad aquí.</p>

    <script src="https://cdn.logwork.com/widget/text.js"></script>
<a href="https://logwork.com/current-time-in-paysandu-uruguay" class="clock-widget-text" data-timezone="America/Montevideo" data-language="es" data-textcolor="#000000" data-digitscolor="#000000">Paysandú, Uruguay, Paysandú</a>
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
