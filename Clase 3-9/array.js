let Sueldos;
Sueldos = new Array (5);
Sueldos [0] = 25.000;
Sueldos [1] = 11.000;
Sueldos [2] = 12.000;

function mostrarSueldos () {
  let verSueldos = document.getElementById('Ver Sueldos');

  for (let i= 0; i<i<Sueldos.length;i++){
    verSueldos.innerHTML+= verSueldos[i] + "<br>";
  }
}

<p id="verSueldos"></p>