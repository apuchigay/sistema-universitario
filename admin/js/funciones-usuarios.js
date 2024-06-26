document.addEventListener('DOMContentLoaded', function(){
    tablaUsuarios = $('#tablaUsuarios').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/2.0.1/i18n/es-ES.json"
        },
        "ajax": {
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
    });

    var formUsuario = document.querySelector('#formUsuario');
    formUsuario.onsubmit = function(e){
        e.preventDefault();

        var nombre = document.querySelector('#nombre').value;
        var usuario = document.querySelector('#usuario').value;
        var clave = document.querySelector('#clave').value;
        var rol = document.querySelector('#listRol').value;
        var estado = document.querySelector('#listEstado').value;

        if(nombre == '' || usuario == '' || clave == ''){
            Swal.fire({
                title: 'Atención',
                text: 'Todos los campos son necesarios', 
                icon: 'error',
                confirmButtonText: 'Ok'
            })
            return false;
        }
        
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        var url = './models/usuarios/ajax-usuarios.php';
        var form = new FormData(formUsuario);
        request.open('POST', url, true);
        request.send(form);
        request.onreadystatechange = function (){
            if(request.readyState == 4 && request.status == 200){
                var data = JSON.parse(request.responseText);
                if(data.status){
                    $('#modalUsuario').modal('hide');
                    formUsuario.reset();
                    Swal.fire({
                        title: 'Usuario',
                        text: data.msg, 
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                    tablaUsuarios.ajax.reload();
                } else {
                    Swal.fire({
                        title: 'Usuario',
                        text: data.msg, 
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                }
            }
        }
    }
})

function openModal(){
    $('#modalUsuario').modal('show');
}

function editarUsuario(id){
    var idusuario = id;

    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        var url = './models/usuarios/edit-usuarios.php?usuario_id='+idusuario;
        request.open('GET', url, true);
        request.send();
        request.onreadystatechange = function (){
            if(request.readyState == 4 && request.status == 200){
                var data = JSON.parse(request.responseText);
                if(data.status){
                    document.querySelector('#idusuario').value = data.data.usuario_id;
                    document.querySelector('#nombre').value = data.data.nombre;
                    document.querySelector('#usuario').value = data.data.usuario;
                    document.querySelector('#listRol').value = data.data.rol;
                    document.querySelector('#listEstado').value = data.data.estado;

                    $('#modalUsuario').modal('show');
                } else {
                    Swal.fire({
                        title: 'Usuario',
                        text: data.msg, 
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                }
            }
        }
}
