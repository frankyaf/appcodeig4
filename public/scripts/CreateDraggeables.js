// Función para crear elementos draggable
function crearDraggables(N) {
    const containerWidth = $('#draggable-container').width();
    const containerHeight = $('#draggable-container').height();

    for (let i = 1; i <= N; i++) {
      const $draggableItem = $('<div>', {
        class: 'draggable-item',
        id: 'draggable-' + i,
        text: 'Elemento ' + i
      });

      // Crear una etiqueta img y añadir la ruta de la imagen
      const $draggableImg = $('<img>', {
        src: 'image_game/imagen' + i + '.jpg', // Reemplaza con la ruta correcta de la imagen
        alt: 'Imagen ' + i
      });

      $draggableItem.append($draggableImg);

      // Posiciones aleatorias dentro del contenedor
      console.log(containerHeight+" "+containerWidth);
      const posX = Math.floor(Math.random() * (containerWidth - 100)); // Ancho del elemento draggable
      const posY = Math.floor(Math.random() * (containerHeight - 100)); // Alto del elemento draggable
      $draggableItem.css({ left: posX, top: posY });

      $draggableItem.draggable({
        //containment: '#draggable-container',
        cursor: 'move',
        contaiment: 'window',
        scroll: false,
        revert: 'invalid',
        stop: function (event, ui) {

        }
      });

      $('#draggable-container').append($draggableItem);
    }
  }

  // Función para reiniciar los elementos draggable y droppable
  function resetDraggables(N) {
    // Elimina los elementos existentes
    $('.draggable-item').remove();

    // Reinicia el contador
    contador = 0;
    actualizarContador();
    objetos = 0;
    actObjeto();

    // Vuelve a crear los elementos draggable
    crearDraggables(N);
  }
  // Llama a la función para crear los elementos draggable después de cerrar el modal
  $(document).ready(function() {
    $('#miModal').on('hidden.bs.modal', function () {
      crearDraggables(6);
    });
  });