<?php include 'vistas/cabecera.php' ?>

<?php
    if(!isset($_GET['codigo'])){
        header('Location: admin_portada.php?mensaje=error');
        exit();
    }

    include_once '../conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from persona where codigo = ?;");
    $sentencia->execute([$codigo]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarproceso.php">
                    <div class="mb-3">
                        <label class="form-label">Usuario: </label>
                        <input type="text" class="form-control" name="usuario" required 
                        value="<?php echo $persona->usuario; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="email" class="form-control" name="correo" autofocus required
                        value="<?php echo $persona->correo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="contraseña" autofocus required
                        value="<?php echo $persona->contraseña; ?>">
                        
                        
                    </div>

                    <div class="form-group">
                    <label class="col-sm-6 text-left">Seleccionar rol</label>
                    <div class="col-sm-12">
                    <select class="form-control" name="rol">
                        <option value="" selected="selected"> - selecccionar rol - </option>
                        <option value="admin">Admin</option>
                        <option value="personal">Personal</option>
                        <option value="usuarios">Usuarios</option>
                    </select>
                    </div>
                </div>
                <br>
                   
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $persona->codigo; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'vistas/pie.php' ?>