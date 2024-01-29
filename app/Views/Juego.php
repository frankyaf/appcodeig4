<div class="container">
  <div class="d-flex justify-content-center">
    <h1>
      Juego Drag and Drop
  </h1>
  </div>

  <div id="cronometro">00:00:00</div>

  <div id="contador">Puntaje: 0</div>

  <div id="objetos">Objetos: 0</div>

  <div id="draggable-container" >
    <!-- Contenedor donde se crearán los elementos draggable -->
    
  </div>

    <div id="categoria1">
      <p>Animales</p>
    </div>

    <div id="categoria2">
      <p>Transportes</p>
    </div>

    <div id="categoria3">
      <p>Deportes</p>
    </div>

    <div id="categoria4">
      <p>Frutas</p>
    </div>
  
    <button type="button" class="btn btn-warning" onclick="resetDraggables(12)">Nivel Medio</button>
    <button type="button" class="btn btn-danger" onclick="resetDraggables(15)">Nivel Difícil</button>
</div>

<!-- Contenido de la página -->

  <!-- Modal -->
  <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
            <p>Arrastra los objetos a su contenedor correspondiente. Evita fallar ya que te restarán puntos. Termina antes del tiempo para pasar al siguiente nivel </p>
            <div class="row d-flex justify-content-evenly align-items-center">
              <div id="draggable-nonvalid" class="ui-widget-content">
                <p>Delfin</p>
                <img src="https://mymodernmet.com/wp/wp-content/uploads/2020/12/how-to-draw-a-dolphin-1.jpg" alt="">
              </div>
              
              <div id="draggable" class="ui-widget-content">
                <p>Gato</p>
                <img src="https://www.elcolectivo.com.ar/u/fotografias/m/2023/7/15/f768x1-144724_144851_133.jpg" alt="">
              </div>
              
              <div class="col-3">
                <p>Agrega aquí a la Mascota</p>
                <div id="droppable" class="ui-widget-header">
                  <p>Mascota</p>
                </div>
              </div>
            </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btnCerrar" data-bs-dismiss="modal">Cerrar</button>
          </div>
      </div>
    </div>
  </div>
</div>

<script>
  let contador = 0;
  let objetos = 0;

  $(function () {

      $("#draggable,#draggable-nonvalid").draggable({
        revert: "invalid",
        containment: "parent",
        scroll: false
      });

      

      $("#droppable" ).droppable({
        accept: "#draggable",
        classes: {
          "ui-droppable-active": "ui-state-active",
          "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
          $( this )
            .addClass( "ui-state-highlight" )
            .find( "p" )
              .html( "Dropped!" );
        }
      });

      $("#categoria1" ).droppable({
        accept: "#draggable-1,#draggable-5,#draggable-9,#draggable-13",
        classes: {
        },
        drop: function( event, ui ) {
          
          $( this )
            .addClass( "ui-state-highlight" )
            .find( "p" )
              .html( "Dropped!");
          const $draggableItem = ui.helper;
          $draggableItem.draggable('disable');
          contador = contador+5;
          actualizarContador();
          objetos = objetos +1;
          actObjeto();
        }
      });

      $("#categoria2" ).droppable({
        accept: "#draggable-2,#draggable-6,#draggable-10,#draggable-14",
        classes: {},
        drop: function( event, ui ) {
          $( this )
            .addClass( "ui-state-highlight" )
            .find( "p" )
              .html( "Dropped!" );
          const $draggableItem = ui.helper;
          $draggableItem.draggable('disable');
          contador = contador+5;
          actualizarContador();
          objetos = objetos +1;
          actObjeto();
        }
      });

      $("#categoria3" ).droppable({
        accept: "#draggable-3,#draggable-7,#draggable-11,#draggable-15",
        classes: {
        },
        drop: function( event, ui ) {
          $( this )
            .addClass( "ui-state-highlight" )
            .find( "p" )
              .html( "Dropped!" );
          const $draggableItem = ui.helper;
          $draggableItem.draggable('disable');
          contador = contador+5;
          actualizarContador();
          objetos = objetos +1;
          actObjeto();
        }
      });

      $("#categoria4" ).droppable({
        accept: "#draggable-4,#draggable-8,#draggable-12",
        classes: {},
        drop: function( event, ui ) {
          $( this )
            .addClass( "ui-state-highlight" )
            .find( "p" )
              .html( "Dropped!" );
          const $draggableItem = ui.helper;
          $draggableItem.draggable('disable');
          contador = contador+5;
          actualizarContador();
          objetos = objetos +1;
          actObjeto();
        }
      });
  });

  // Función para actualizar la visualización del contador
  function actualizarContador() {
      $('#contador').text('Puntaje: ' + contador);
  }

  function actObjeto(){
      $('#objetos').text('Objetos: '+objetos);
  }

  $(document).ready(function () {
    $("#miModal").modal('show');
    
    
  });
</script>