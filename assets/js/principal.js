var principal = window.principal || {};

principal.uveg = (function () {
    return {
        cambiar_ventana: function () {
            $(document).on('click', '.tab', function (event) {
                id = this.id;
                switch(id){
                    case '2':
                        $("#load_page").load("index.php/Home/centro");                    
                    break;
                    case '3':
                        $("#load_page").load("index.php/Home/alumnos");
                    break;
                    case '4':
                        $("#load_page").load("index.php/Home/calificaciones");
                    break;
                    default:
                        $("#load_page").html("");
                    break;
                }
            });
            $(document).on('click', '.detalles', function (event) {                
                var id = $(this).attr("data-info");
                var tipo = $(this).attr("data-tipo");

                switch (tipo){
                    case '1':
                        $("#load_page").load("index.php/Home/detalle_centro/"+id);
                    break;
                    case '2':
                        $("#load_page").load("index.php/Home/detalle_alumno/"+id);
                    break;
                    case '3':
                        $("#load_page").load("index.php/Home/edicion_alumno/"+id);
                    break;
                }                            
            });           
        },

        tabla_centros:function(){
            $('#centros').DataTable({
                scrollX: true,
                pageLength : 25,
                lengthMenu: [[25, 50, 75, -1], [25, 50, 75, 'Todos']],
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        },
        tabla_alumnos:function(){
            $('#alumnos').DataTable({
                scrollX: true,
                pageLength : 50,
                lengthMenu: [[5, 10, 25, 50, 75, -1], [5, 10, 25, 50, 75, 'Todos']],
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        },
        sbm_alumnos: function () {
            $("#sbm_alumnos").submit(function (event) {
                $.ajax({
                    url: jsvar + 'index.php/Home/submit_actualizar_participante',
                    type: 'post',
                    dataType: 'html',
                    data: $("#sbm_alumnos").serialize(),
                        
                    success: function (response, textStatus, jqXHR) {
                        if (response == '1') {
                            alert("Se actualizó el registro de manera exitosa");
                            $("#load_page").load("index.php/Home/detalle_alumno/"+$('#id_alumno_tbc').val());
                        }
                   
                        
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log('error(s):' + textStatus, errorThrown);
                        alert('error'+textStatus + ' ' + errorThrown);    
                    }
                });                
                event.preventDefault();
                event.stopImmediatePropagation();
            });
        },

        calcula_promedio:function(){
            $(document).on('change', '.calificacion', function (event) {

                cal1 = $("#calificacion1").val();
                cal2 = $("#calificacion2").val();
                cal3 = $("#calificacion3").val();

                if (cal1 !== "" && cal2 !== "" && cal3 !== "" ) {
                    //Calcular el promedio
                    promedio = (parseFloat(cal1)+parseFloat(cal2)+parseFloat(cal3))/3;
                    $("#promedio").val(promedio.toFixed(1));
                }

            });
        },
        sbm_calificaciones: function () {
            $("#sbm_calificaciones").submit(function (event) {
                $.ajax({
                    url: jsvar + 'index.php/Home/submit_guardar_calificacion',
                    type: 'post',
                    dataType: 'html',
                    data: $("#sbm_calificaciones").serialize(),
                        
                    success: function (response, textStatus, jqXHR) {
                        if (response == '1') {
                            alert("Se guardo la calificación correctamente");
                            $("#load_page").load("index.php/Home/calificaciones");
                        }                     
                        
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log('error(s):' + textStatus, errorThrown);
                        alert('error'+textStatus + ' ' + errorThrown);    
                    }
                });                
                event.preventDefault();
                event.stopImmediatePropagation();
            });
        },




    }
})();