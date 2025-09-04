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
