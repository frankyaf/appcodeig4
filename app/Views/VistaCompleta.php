    <div class="container">
        <div class="text-center">
        <h1>Noticia Completa</h1>
        </div>
        <div id="resultado">
            
        </div>

        <button onclick="irPagina()" type="button" class="btn btn-outline-success">Administración</button>
    </div>

    <script>
        // Acceder al servicio REST con jQuery
        ObjectID = <?php echo $id ?>;
        $.ajax({
            url: 'http://localhost/codeig4/public/Articulos/listaArticulosPortada',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Manejar los datos recibidos
                console.log(data[ObjectID-3]);
                // Tratar los valores de la primera entrada como un array
                var valuesArray = Object.values(data[ObjectID-3]);

                // Crear card
                var cardHtml = '<div class="card">';
                $.each(valuesArray, function(_, value) {
                    cardHtml += `<p>${value}</p>`;
                });
                cardHtml += '</div>';

                // Mostrar la card en el elemento con ID 'resultado'
                $('#resultado').html(cardHtml);
            },
            error: function(xhr, status, error) {
                console.error('Error al acceder al servicio REST:', error);
            }
        });

        // Función para redirigir a otra página
        function irPagina() {
            window.location.href = 'Articulos/listaArticulos'; // Reemplaza 'otra_pagina.html' con la URL de la página a la que deseas ir
        }
    </script>