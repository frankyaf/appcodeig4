
    <div class="container">
        <div class="row">
            <h3>
                    Administración de Articulos
            </h3>
        </div>
    
        <div class="row ">
            <div class="dflex justify-content-md-end">
                <button type="button" class="btn btn-success " id="btnNuevoArticulo">Nuevo Articulo</button>
            </div>    
        </div>

                <table id="tableArticulos" class="table table-bordered border-dark table-condensed table-hover" style="width:100%">
                      <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Síntesis</th>
                                <th>Palabras Clave</th>
                                <th>Edad Mínima</th>
                                <th>Edad Máxima</th>
                                <th>Nombre de Portada</th>
                                <th>Nombre de Previa</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                          </thead>
                        <tbody id="actualizar">
                                                           
                        </tbody>
                               
                </table>
    </div>

    <div class="container ">

          <div class="modal fade" id="modalTabla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formArticulo">    
                        <div class="modal-body">
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Titulo:</label>
                            <input type="text" class="form-control" id="titulo">
                            </div>

                            <div class="form-group">
                            <label for="keywords" class="col-form-label">Keywords:</label>
                            <input type="text" class="form-control" id="keywords">
                            </div>

                            <div class="form-group">
                                <label for="sintesis" class="col-form-label">Sintesis:</label>
                                <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="sintesis" style="height: 100px"></textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group ">
                                    <label for="keywords" class="col-form-label">Edad Minima:</label>
                                    <input type="number" class="form-control" id="min_age">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group ">
                                    <label for="keywords" class="col-form-label">Edad Maxima:</label>
                                    <input type="number" class="form-control" id="max_age">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Nombre Portada:</label>
                            <input type="text" class="form-control" id="nombre_portada">
                            </div>

                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Nombre Previa:</label>
                            <input type="text" class="form-control" id="nombre_previa">
                            </div>
                            
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Fecha:</label>
                            <input type="datetime-local" class="form-control" id="fecha">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                        </div>
                    </form>
          
                </div>
                
              </div>
            </div>
          </div>

    </div>

    <div class="container ">

          <div class="modal fade" id="modalTablaEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formArticuloEdit">    
                        <div class="modal-body">
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Id:</label>
                            <input type="text" class="form-control" id="id_e" readonly>
                            </div>

                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Titulo:</label>
                            <input type="text" class="form-control" id="titulo_e">
                            </div>

                            <div class="form-group">
                            <label for="keywords" class="col-form-label">Keywords:</label>
                            <input type="text" class="form-control" id="keywords_e">
                            </div>

                            <div class="form-group">
                                <label for="sintesis" class="col-form-label">Sintesis:</label>
                                <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="sintesis_e" style="height: 100px"></textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group ">
                                    <label for="keywords" class="col-form-label">Edad Minima:</label>
                                    <input type="number" class="form-control" id="min_age_e">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group ">
                                    <label for="keywords" class="col-form-label">Edad Maxima:</label>
                                    <input type="number" class="form-control" id="max_age_e">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Nombre Portada:</label>
                            <input type="text" class="form-control" id="nombre_portada_e">
                            </div>

                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Nombre Previa:</label>
                            <input type="text" class="form-control" id="nombre_previa_e">
                            </div>
                            
                            <div class="form-group">
                            <label for="titulo" class="col-form-label">Fecha:</label>
                            <input type="datetime-local" class="form-control" id="fecha_e">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                        </div>
                    </form>
          
                </div>
                
              </div>
            </div>
          </div>

    </div>
<script>
    $(document).ready(function(){
        tableRI = $('#tableArticulos').DataTable({
        //scrollY: '200px',
        //responsive: true,
        dom: 'Bflrtip',
        buttons: [
            'copy', 'csv', 'excel','print',
        ],
        /*"columnDefs":[{
            "targets": -1,
            "data":null,
            "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
           }],*/
            
        "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                 },
                 "sProcessing":"Procesando...",
            },
            ajax: {
                    url: 'http://localhost/codeig4/public/Articulos/listaArticulosPortada',
                    dataSrc: ''
                },
                columns: [
                    { data: 'id' },
                    { data: 'titulo' },
                    { data: 'sintesis' },
                    { data: 'keywords' },
                    { data: 'min_age' },
                    { data: 'max_age' },
                    { data: 'nombre_portada' },
                    { data: 'nombre_previa' },
                    { data: 'fecha' },
                    {
                        data: null,
                        render: function (data, type, row) {
                            //return '<button class="editar" data-id="' + row.id + '">Editar</button>' +
                            //       '<button class="borrar" data-id="' + row.id + '">Borrar</button>';
                            return`
                                <div class='text-center'>
                                    <div class='btn-group'>
                                        <button class='btn btn-primary btnEditar' data-id='${row.id}'>Editar</button>
                                        <button class='btn btn-danger btnBorrar' data-id='${row.id}'>Borrar</button>
                                    </div>
                                </div>`;
                        }
                    }
                ]

        });

        // Configurar eventos para los botones
        $('#tableArticulos').on('click', '.btnEditar', function() {
                var id = $(this).data('id');
                // Lógica para editar usando el ID
               // alert('Editar fila con ID ' + id);

                fila = $(this).closest("tr");
                id = parseInt(fila.find('td:eq(0)').text());
                titulo = fila.find('td:eq(1)').text();
                sintesis = fila.find('td:eq(2)').text();
                keywords = fila.find('td:eq(3)').text();
                min_age = fila.find('td:eq(4)').text();
                max_age = fila.find('td:eq(5)').text();
                nombre_portada = fila.find('td:eq(6)').text();
                nombre_previa = fila.find('td:eq(7)').text();
                fecha = fila.find('td:eq(8)').text();

                $("#id_e").val(id);
                $("#titulo_e").val(titulo);
                $("#sintesis_e").val(sintesis);
                $("#keywords_e").val(keywords);
                $("#min_age_e").val(min_age);
                $("#max_age_e").val(max_age);
                $("#nombre_portada_e").val(nombre_portada);
                $("#nombre_previa_e").val(nombre_previa);
                $("#fecha_e").val(fecha);

                opcion = 2; //editar

                $(".modal-header").css("background-color", "#4e73df");
                $(".modal-header").css("color", "white");
                $(".modal-title").text("Editar Articulo");
                $("#modalTablaEdit").modal("show");
        });

        $("#btnNuevoArticulo").click(function(){

            $("#formArticulo").trigger("reset");
            $(".modal-header").css("background-color", "#1cc88a");
            $(".modal-header").css("color", "white");
            $(".modal-title").text("Nuevo Articulo");
            $("#modalTabla").modal("show");

                id=null;
                opcion = 1; // alta de articulo
        });

        $("#formArticulo").submit(function(e){
            e.preventDefault();    
            titulo = $.trim($("#titulo").val());
            sintesis = $.trim($("#sintesis").val());
            keywords = $.trim($("#keywords").val());
            min_age = $.trim($("#min_age").val());
            max_age = $.trim($("#max_age").val());
            nombre_portada = $.trim($("#nombre_portada").val());
            nombre_previa = $.trim($("#nombre_previa").val());
            fecha =$.trim($("#fecha").val());

            console.log(fecha);
            $.ajax({
                url: "http://localhost/codeig4/public/Articulos/nuevoArticulo",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    titulo: titulo,
                    sintesis: sintesis,
                    keywords: keywords,
                    min_age: min_age,
                    max_age: max_age,
                    nombre_portada: nombre_portada,
                    nombre_previa: nombre_previa,
                    fecha: fecha,
                    id: id,
                    opcion: opcion
                }),
                //{titulo:titulo,sintesis:sintesis,keywords:keywords,min_age:min_age,max_age:max_age,nombre_portada:nombre_portada,nombre_previa:nombre_previa,fecha:fecha, id:id, opcion:opcion},
                success: function(data){  
                    console.log(data);
                    alert(data.id);
                    id = data[0].id;            
                    titulo = data[0].titulo;
                    sintesis = data[0].sintesis;
                    keywords = data[0].keywords;
                    min_age = data[0].min_age;
                    max_age = data[0].max_age;
                    nombre_portada = data[0].nombre_portada;
                    nombre_previa = data[0].nombre_previa;
                    fecha = data[0].fecha;
                    
                    if(opcion == 1){tableArticulos.row.add([id,titulo,sintesis,keywords,min_age,max_age,nombre_portada,nombre_previa,fecha]).draw();}
                    else{tableArticulos.row(fila).data([id,titulo,sintesis,keywords,min_age,max_age,nombre_portada,nombre_previa,fecha]).draw();}            
                }     
            });

            $("#modalTabla").modal("hide");    
        
        });

        $("#formArticuloEdit").submit(function(e){
            e.preventDefault();
            id = $.trim($("#id_e").val());    
            titulo = $.trim($("#titulo_e").val());
            sintesis = $.trim($("#sintesis_e").val());
            keywords = $.trim($("#keywords_e").val());
            min_age = $.trim($("#min_age_e").val());
            max_age = $.trim($("#max_age_e").val());
            nombre_portada = $.trim($("#nombre_portada_e").val());
            nombre_previa = $.trim($("#nombre_previa_e").val());
            fecha =$.trim($("#fecha_e").val());

            console.log(fecha);

            $.ajax({
                url: "http://localhost/codeig4/public/Articulos/actualizarArticulo/"+id,
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    titulo: titulo,
                    sintesis: sintesis,
                    keywords: keywords,
                    min_age: min_age,
                    max_age: max_age,
                    nombre_portada: nombre_portada,
                    nombre_previa: nombre_previa,
                    fecha: fecha,
                    id: id,
                    opcion: opcion
                }),
                success: function(data){  
                    console.log(data);
                    alert(data[0].id);
                    id = data[0].id;            
                    titulo = data[0].titulo;
                    sintesis = data[0].sintesis;
                    keywords = data[0].keywords;
                    min_age = data[0].min_age;
                    max_age = data[0].max_age;
                    nombre_portada = data[0].nombre_portada;
                    nombre_previa = data[0].nombre_previa;
                    fecha = data[0].fecha;
                    
                    if(opcion == 1){tableArticulos.row.add([id,titulo,sintesis,keywords,min_age,max_age,nombre_portada,nombre_previa,fecha]).draw();}
                    else{tableArticulos.row(fila).data([id,titulo,sintesis,keywords,min_age,max_age,nombre_portada,nombre_previa,fecha]).draw();}            
                }     
            });

            $("#modalTablaEdit").modal("hide");   
            
        });

    }
    );

</script>