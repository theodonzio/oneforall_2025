// ========== Reloj Digital ==========
const $hora = document.querySelector('.hora');

function actualizarReloj(){
  let ahora = new Date();
  $hora.textContent = ahora.toLocaleTimeString("es-UY", { hour12: false });
}
setInterval(actualizarReloj, 1000);
actualizarReloj();

// ========== Calendario ==========
let mes = new Date().getMonth();
let anio = new Date().getFullYear();

function generarCalendario(m, a) {
  const dias = ["Dom","Lun","Mar","Mié","Jue","Vie","Sáb"];
  const primerDia = new Date(a, m, 1).getDay();
  const totalDias = new Date(a, m+1, 0).getDate();
  const hoy = new Date();

  // Estructura HTML del calendario
  let html = `
    <div class="d-flex align-items-center mb-3 w-100">
      <button class="btn btn-outline-primary" id="anterior">Anterior</button>
      <h4 class="flex-grow-1 m-0">
        ${new Date(a,m).toLocaleString("es-UY",{month:"long",year:"numeric"})}
      </h4>
      <button class="btn btn-outline-primary" id="siguiente">Siguiente</button>
    </div>
    <table class="table table-bordered text-center">
      <thead><tr>${dias.map(d=>`<th>${d}</th>`).join("")}</tr></thead><tbody><tr>
  `;

  // Celdas vacías antes del primer día
  for(let i=0;i<primerDia;i++) html += "<td></td>";

  // Días del mes
  for(let d=1; d<=totalDias; d++){
    if((primerDia+d-1)%7===0) html+="</tr><tr>";
    let clase = (d===hoy.getDate() && m===hoy.getMonth() && a===hoy.getFullYear()) 
      ? "bg-primary text-white fw-bold" : "";
    html += `<td class="${clase}">${d}</td>`;
  }
  html+="</tr></tbody></table>";

  // Renderizar calendario
  document.getElementById("calendario").innerHTML = html;

  // Botones de navegación
  document.getElementById("anterior").onclick = ()=>{
    mes--; if(mes<0){mes=11;anio--;} generarCalendario(mes,anio);
  };
  document.getElementById("siguiente").onclick = ()=>{
    mes++; if(mes>11){mes=0;anio++;} generarCalendario(mes,anio);
  };
}

generarCalendario(mes,anio);


/* ==========================================
    LOGIN
  ==========================================*/

  document.addEventListener("DOMContentLoaded", () => {
  const formulario = document.getElementById("formulario-login");
  const usuario = document.getElementById("usuario");
  const contrasena = document.getElementById("contrasena");
  const mensajeError = document.getElementById("mensaje-error");

  formulario.addEventListener("submit", (e) => {
    mensajeError.textContent = "";

    if (usuario.value.trim() === "" || contrasena.value.trim() === "") {
      e.preventDefault();
      mensajeError.textContent = "Por favor, complete todos los campos.";
    }
  });
});

/* ==========================================
    DOCENTES
  ==========================================*/

function agregarDocente() {
  const contenedor = document.getElementById("lista-docentes");
  const nuevo = document.createElement("div");
  nuevo.className = "col-md-4 mb-4";
  nuevo.innerHTML = `
    <div class="tarjeta-docente p-3 text-center">
      <label for="foto-input" class="d-block mb-3">
        <img src="../img/icons/maleuser_icon.png" class="foto-docente" id="preview-foto">
      </label>
      <input type="file" id="foto-input" accept="image/*" style="display:none" onchange="previewFoto(event, this)">
      <h5 contenteditable="true">Nuevo Docente</h5>
      <p><strong>Materia:</strong> <span contenteditable="true">Escribir...</span></p>
      <p><strong>Sexo:</strong> <span contenteditable="true">Escribir...</span></p>
      <p><strong>Edad:</strong> <span contenteditable="true">0</span> años</p>
    </div>
  `;
  contenedor.appendChild(nuevo);
}

function previewFoto(event, input) {
  const img = input.previousElementSibling.querySelector("img");
  img.src = URL.createObjectURL(event.target.files[0]);
}