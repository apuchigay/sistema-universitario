$(document).ready(function() {
    $('#loginUsuario').on('click', function(){
        loginUsuario();
    });

    $('#loginDocente').on('click', function(){
        loginDocente();
    });
})

function loginUsuario(){
    var login = $('#usuario').val();
    var pass = $('#pass').val();

    $.ajax({
        url: './includes/loginUsuario.php',
        method: 'POST',
        data: {
            login:login,
            pass:pass
        },
        success: function(data){
            $('#messageUsuario').html(data);

            if(data.indexOf('Redirecting')>=0){
                window.location = 'admin/';
            }
        }
    })
}

function loginDocente(){
    var login = $('#usuario').val();
    var pass = $('#pass').val();

    $.ajax({
        url: './includes/loginDocente.php',
        method: 'POST',
        data: {
            login: login,
            pass: pass
        },
        success: function(data){
            $('#messageDocente').html(data);

            if(data.indexOf('Redirecting')>=0){
                window.location = 'docente/';
            }
        }
    })
}