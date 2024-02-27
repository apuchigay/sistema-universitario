<?php 

session_start();

if(!empty($_POST)){
    if(empty($_POST['loginDocente']) || empty($_POST['passDocente'])){
        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"></button>Todos los campos son necesarios</div>';
    } else {
        require_once 'conexion.php';
        $login = $_POST['loginDocente'];
        $pass = $_POST['passDocente'];

        $sql = 'SELECT * FROM docentes d WHERE d.cedula = ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($login));
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($query->rowCount() > 0){
            if(password_verify($pass, $result['clave'])){
                $_SESSION['activeD'] = true;
                $_SESSION['id_docente'] = $result['docente_id'];
                $_SESSION['nombre'] = $result['usuario'];
                $_SESSION['cedula'] = $result['cedula'];

                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"></button>Redirecting</div>';
            }else{
                echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"></button>Usuario y/o contraseña incorrectos</div>';
            }
        } else {
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"></button>Usuario y/o contraseña incorrectos</div>';
        }
    }
}
