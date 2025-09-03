var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
dropdownElementList.forEach(function (dropdownToggleEl) {
  new bootstrap.Dropdown(dropdownToggleEl, {
    offset: [-10, 20]  // desplaza el dropdown 60px hacia arriba
  })
})
// ==========================
// Reloj en hora de Paysandú
// ==========================
function actualizarReloj() {
  let opciones = {
    timeZone: "America/Montevideo",
    hour: "2-digit",
    minute: "2-digit",
    second: "2-digit"
  };
  let ahora = new Intl.DateTimeFormat("es-UY", opciones).format(new Date());
  document.getElementById("reloj").textContent = "Hora en Paysandú: " + ahora;
}

// actualizar cada segundo
setInterval(actualizarReloj, 1000);
actualizarReloj();
