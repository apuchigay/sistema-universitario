<?php
require_once '../../../includes/conexion.php';

if(!empty($_POST)){
    if(empty($_POST['nombre']) || empty($_POST['usuario']) || empty($_POST['clave'])){
        $respuesta = array('status' => false, 'msg' => 'Todos los campos son necesarios');
    } else {
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $rol = $_POST['listRol'];
        $estado = $_POST['listEstado'];

        $clave = password_hash($clave, PASSWORD_DEFAULT);

        $sql = 'SELECT * FROM usuarios WHERE usuario = ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario));
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result) {
            $respuesta = array('status' => false, 'msg' => 'El usuario ya existe');
        } else {
            $sqlInsert = 'INSERT INTO usuarios(nombre, usuario, clave, rol, estado) VALUES (?, ?, ?, ?, ?)';
            $queryInsert = $pdo->prepare($sqlInsert);
            $resultInsert = $queryInsert->execute(array($nombre, $usuario, $clave, $rol, $estado));
            if($resultInsert) {
                $respuesta = array('status' => true, 'msg' => 'Usuario creado con éxito');
            } else {
                $respuesta = array('status' => false, 'msg' => 'Error al crear el usuario');
            }
        }
    }

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
}
?>
