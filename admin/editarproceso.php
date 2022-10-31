<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: admin_portada.php?mensaje=error');
    }

    include '../conexion.php';
    $codigo = $_POST['codigo'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];

    $sentencia = $bd->prepare("UPDATE persona SET usuario = ?, correo = ?, contraseña = ?, rol = ? where codigo = ?;");
    $resultado = $sentencia->execute([$usuario, $correo, $contraseña, $rol, $codigo]);

    if ($resultado === TRUE) {
        header('Location: admin_portada.php?mensaje=editado');
    } else {
        header('Location: admin_portada.php?mensaje=error');
        exit();
    }
    
?>