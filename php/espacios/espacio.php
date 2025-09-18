<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Espacios - OFAV4</title>
  <!-- Bootstrap y estilos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/style.css">
  <!-- Fuente Montserrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="d-flex">
<!-- Barra lateral -->
<?php include "../../php/header.php"; ?> 

<!-- Contenido principal -->
<main class="flex-grow-1 p-4" style="height: 100vh; overflow-y: auto; color: white;">
    <h1 class="mb-4">Espacios</h1>

    <!-- Botón para agregar nuevo espacio -->
    <div class="mb-4">
      <button class="btn btn-primary" onclick="agregarEspacio()">Agregar Espacio</button>
    </div>

    <!-- Grilla de espacios -->
    <div class="row" id="lista-espacios">

      <!-- Ejemplo de espacio Aula 1 -->
      <div class="col-md-4 mb-4">
        <div class="tarjeta-docente p-3">
          <h5>Aula 1</h5>
          <p><strong>Tipo:</strong> Aula</p>
          <p><strong>Capacidad:</strong> 30 personas</p>
          <p><strong>Elementos:</strong></p>
          <ul>
            <li>Enchufes</li>
            <li>Televisor</li>
            <li>Proyector</li>
          </ul>
        </div>
      </div>

      <!-- Ejemplo de espacio Aula 2 -->
      <div class="col-md-4 mb-4">
        <div class="tarjeta-docente p-3">
          <h5>Aula 2</h5>
          <p><strong>Tipo:</strong> Aula</p>
          <p><strong>Capacidad:</strong> 25 personas</p>
          <p><strong>Elementos:</strong></p>
          <ul>
            <li>Enchufes</li>
            <li>Alargue</li>
          </ul>
        </div>
      </div>
    </div>
</main>

<!-- JS de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>
function agregarEspacio() {
  const contenedor = document.getElementById("lista-espacios");

  const nuevo = document.createElement("div");
  nuevo.classList.add("col-md-4", "mb-4");
  nuevo.innerHTML = `
    <div class="tarjeta-docente p-3">
      <h5>Nuevo Espacio</h5>
      <p><strong>Tipo:</strong> 
        <select class="form-select form-select-sm tipo-espacio">
          <option value="Aula">Aula</option>
          <option value="Laboratorio">Laboratorio</option>
          <option value="Salón">Salón</option>
        </select>
      </p>
      <p><strong>Capacidad:</strong> 
        <input type="number" class="form-control form-control-sm capacidad" placeholder="Ej: 40">
      </p>
      <p><strong>Elementos:</strong></p>
      <div class="form-check">
        <input class="form-check-input elemento" type="checkbox" value="Enchufes">
        <label class="form-check-label">Enchufes</label>
      </div>
      <div class="form-check">
        <input class="form-check-input elemento" type="checkbox" value="Televisor">
        <label class="form-check-label">Televisor</label>
      </div>
      <div class="form-check">
        <input class="form-check-input elemento" type="checkbox" value="Proyector">
        <label class="form-check-label">Proyector</label>
      </div>
      <div class="form-check">
        <input class="form-check-input elemento" type="checkbox" value="Alargue">
        <label class="form-check-label">Alargue</label>
      </div>
      <div class="mt-3">
        <button class="btn btn-success btn-sm" onclick="confirmarEspacio(this)">Confirmar</button>
      </div>
    </div>
  `;
  contenedor.appendChild(nuevo);
}

function confirmarEspacio(boton) {
  const tarjeta = boton.closest(".tarjeta-docente");

  const tipo = tarjeta.querySelector(".tipo-espacio").value;
  const capacidad = tarjeta.querySelector(".capacidad").value || "No especificada";

  const elementosSeleccionados = [];
  tarjeta.querySelectorAll(".elemento:checked").forEach(chk => {
    elementosSeleccionados.push(chk.value);
  });

  // Reemplazar contenido con versión final
  tarjeta.innerHTML = `
    <h5>Nuevo Espacio Confirmado</h5>
    <p><strong>Tipo:</strong> ${tipo}</p>
    <p><strong>Capacidad:</strong> ${capacidad} personas</p>
    <p><strong>Elementos:</strong></p>
    <ul>
      ${elementosSeleccionados.length > 0 ? elementosSeleccionados.map(el => `<li>${el}</li>`).join('') : "<li>Ninguno</li>"}
    </ul>
  `;
}
</script>
</body>
</html>