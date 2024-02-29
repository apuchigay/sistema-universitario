$('#tablaUsuarios').DataTable();

var tablaUsuarios;

document.addEventListener('DOMContentLoaded', function(){
    tablaUsuarios = $('#tablaUsuarios').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url:": "//cdn.datatables.net/plug-ins/2.0.1/i18n/es-ES.json"
        },
        "ajax":{
            "url": "./models/usuarios/tablaUsuarios.php",
            "dataSrc": ""
        },
        "columns": [
            {"data":"acciones"},
            {"data":"usuario_id"},
            {"data":"nombre"},
            {"data":"usuario"},
            {"data":"nombre_rol"},
            {"data":"estado"}
        ],
        "responsive": true,
        "bDestroy": true,
        "iDisplayLength": 10, //Cantidad de datos que muestra la tabla por defecto
        "order": [[0,"asc"]],
    })
})

function openModal(){
    $('#modalUsuario').modal('show');
}