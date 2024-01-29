    let cronometro;
    let segundos = 0;
    let minutos = 0;
    let horas = 0;

    // Evento que se ejecuta después de cerrar el modal
    $(document).ready(function() {
      $('#miModal').on('hidden.bs.modal', function () {
        iniciarCronometro();
        
      });
    });

    function iniciarCronometro() {
      cronometro = setInterval(actualizarCronometro, 1000);
    }

    function detenerCronometro() {
      clearInterval(cronometro);
    }

    function reiniciarCronometro() {
      detenerCronometro();
      segundos = 0;
      minutos = 0;
      horas = 0;
      actualizarCronometro();
    }

    function actualizarCronometro() {
      segundos++;
        if(segundos === 40){
            detenerCronometro();
        }

      if (segundos === 60) {
        segundos = 0;
        minutos++;

        if (minutos === 60) {
          minutos = 0;
          horas++;
        }
      }

      const tiempoFormateado = 
        `${agregarCero(horas)}:${agregarCero(minutos)}:${agregarCero(segundos)}`;

      document.getElementById('cronometro').innerText = tiempoFormateado;
    }

    function agregarCero(valor) {
      return valor < 10 ? `0${valor}` : valor;
    }