<?php 
    if(!isset($_GET['codigo'])){
        header('Location: personal_portada.php?mensaje=error');
        exit();
    }

    include '../conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM persona where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: personal_portada.php?mensaje=eliminado');
    } else {
        header('Location: personal_portada.php?mensaje=error');
    }
    
?>