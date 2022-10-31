<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["usuario"]) || empty($_POST["correo"]) || empty($_POST["contraseña"]) || empty($_POST["rol"])){
        header('Location: admin_portada.php?mensaje=falta');
        exit();
    }

    include_once ('../conexion.php');
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $rol = $_POST["rol"];
    
    $sentencia = $bd->prepare("INSERT INTO persona (usuario,correo,contraseña,rol) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$usuario,$correo,$contraseña,$rol]);

    if ($resultado === TRUE) {
        header('Location: admin_portada.php?mensaje=registrado');
    } else {
        header('Location: admin_portada.php?mensaje=error');
        exit();
    }
    
?>