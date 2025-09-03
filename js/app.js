var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
dropdownElementList.forEach(function (dropdownToggleEl) {
  new bootstrap.Dropdown(dropdownToggleEl, {
    offset: [-10, 20]  // desplaza el dropdown 60px hacia arriba
  })
})
// ==========================
// Reloj en hora de Paysandú
// ==========================
const $tiempo = document.querySelector('.tiempo'),
$fecha = document.querySelector('.fecha');

function digitalClock(){
    let f = new Date(),
    dia = f.getDate(),
    mes = f.getMonth() + 1,
    anio = f.getFullYear(),
    diaSemana = f.getDay();

    dia = ('0' + dia).slice(-2);
    mes = ('0' + mes).slice(-2)

    let timeString = f.toLocaleTimeString();
    $tiempo.innerHTML = timeString;

    let semana = ['DOM','LUN','MAR','MIE','JUE','VIE','SAB'];
    let showSemana = (semana[diaSemana]);
    $fecha.innerHTML = `${anio}-${mes}-${dia} ${showSemana}`
}
setInterval(() => {
    digitalClock()
}, 1000);
// ==========================
// Calendario interactivo
// ==========================

let fechaHoy = new Date();
let mesActual = fechaHoy.getMonth();
let anioActual = fechaHoy.getFullYear();

function generarCalendario(mes, anio) {
  const diasSemana = ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"];
  const primerDiaMes = new Date(anio, mes, 1);
  const ultimoDiaMes = new Date(anio, mes + 1, 0).getDate();

  let html = `<div class="d-flex justify-content-between align-items-center mb-3">
                <button class="btn btn-outline-primary" id="prevMes">&lt; Anterior</button>
                <h4 class="m-0">${primerDiaMes.toLocaleString("es-UY", { month: "long", year: "numeric" })}</h4>
                <button class="btn btn-outline-primary" id="sigMes">Siguiente &gt;</button>
              </div>`;

  html += `<table class="table table-bordered text-center">`;
  html += `<thead><tr>`;

  // cabecera días
  for (let dia of diasSemana) {
    html += `<th>${dia}</th>`;
  }
  html += `</tr></thead><tbody><tr>`;

  // espacios vacíos antes del primer día
  for (let i = 0; i < primerDiaMes.getDay(); i++) {
    html += `<td></td>`;
  }

  // días del mes
  for (let dia = 1; dia <= ultimoDiaMes; dia++) {
    let fechaIterada = new Date(anio, mes, dia);
    let hoy = new Date();

    let claseHoy = 
      dia === hoy.getDate() && mes === hoy.getMonth() && anio === hoy.getFullYear()
        ? "bg-primary text-white rounded-circle"
        : "";

    if ((primerDiaMes.getDay() + dia - 1) % 7 === 0) {
      html += `</tr><tr>`;
    }
    html += `<td class="${claseHoy}">${dia}</td>`;
  }

  html += `</tr></tbody></table>`;

  document.getElementById("calendario").innerHTML = html;

  // eventos de navegación
  document.getElementById("prevMes").addEventListener("click", () => {
    mesActual--;
    if (mesActual < 0) {
      mesActual = 11;
      anioActual--;
    }
    generarCalendario(mesActual, anioActual);
  });

  document.getElementById("sigMes").addEventListener("click", () => {
    mesActual++;
    if (mesActual > 11) {
      mesActual = 0;
      anioActual++;
    }
    generarCalendario(mesActual, anioActual);
  });
}

// Mostrar mes actual
generarCalendario(mesActual, anioActual);
