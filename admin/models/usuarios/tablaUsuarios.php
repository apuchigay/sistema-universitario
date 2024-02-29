<?php

require_once '../../../includes/conexion.php';

$sql = 'SELECT * FROM usuarios u INNER JOIN rol r ON u.rol = r.rol_id'; // Condicional que elimina los usuarios inactivos:  WHERE u.estado != 0
$query = $pdo -> prepare($sql);
$query->execute();

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);

for($i=0;$i<count($consulta);$i++){
    if($consulta[$i]['estado']==1){
        $consulta[$i]['estado']='<span class="badge bg-success">Activo</span>';
    }else{
        $consulta[$i]['estado']='<span class="badge bg-danger">Inactivo</span>';
    }

    $consulta[$i]['acciones']='
        <button class="btn btn-primary" tittle="Editar" onclick="editarUsuario('.$consulta[$i]['usuario_id'].')">Editar</button>
        <button class="btn btn-danger" tittle="Eliminar" onclick="eliminarUsuario('.$consulta[$i]['usuario_id'].')">Eliminar</button>
    ';
}

echo json_encode($consulta, JSON_UNESCAPED_UNICODE);