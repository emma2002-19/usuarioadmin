<?php 
    if(!isset($_GET['codigo'])){
        header('Location: admin_portada.php?mensaje=error');
        exit();
    }

    include '../conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM persona where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: admin_portada.php?mensaje=eliminado');
    } else {
        header('Location: admin_portada.php?mensaje=error');
    }
    
?>