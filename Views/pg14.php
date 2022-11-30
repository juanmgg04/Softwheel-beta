<?php

$usuario= $_SESSION['nombre_usuario'];
$id = $_SESSION['id'];

if($usuario==null || $usuario==''){

  echo '<script language="javascript">alert("Debes iniciar sesión.");window.location.href="UsersController.php?action=login"</script>';
  

  die();
  }
$id = $_SESSION['id'];
include '../Config/Conexion.php';
$conexion = new Conexion();
$sql = "SELECT * FROM usuarios WHERE id=$id";
$consulta = $conexion->stm->prepare($sql);
$consulta->execute();
$persona = $consulta->fetchAll(PDO::FETCH_OBJ);
foreach ($persona as $u) {
}
?>






<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
  
    <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Public/Css/style2.css">
</head>

<body>

    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <fieldset>
        <img src="../Public/Img/logopr.png" id="logo">
    </fieldset>


    <fieldset>
        <legend>
            <h1> Actualizar Usuario </h1>
        </legend>
    </fieldset>

    <div class="container" id="dates">
        <form action="UsersController.php?action=usuarioactualizado" method="POST">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <input type="hidden" name="action" value="usuarioactualizado">
                    <div class="form-floating">
                        <input placeholder="Nombre de usuario" class="form-control bg-dark  text-white border-dark " name="nombre_usuario" required oninvalid="this.setCustomValidity('Por favor ingresa tu nombre')" value="<?php echo $_SESSION['nombre_usuario']; ?>" id="user">
                        <label for="user" class="text-white">Nombre de usuario</label>
                    </div><br>
                    <input type="hidden" name='id' value='<?php echo $_SESSION['id'] ?>'>

                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="form-floating" id="flotar">
                        <input placeholder="Nombre y Apellidos" class="form-control bg-dark  text-white border-dark" name="nombre_apellidos" required value="<?php echo $_SESSION['nombre_apellidos']; ?>" id="nombre">
                        <label for="nombre" class="text-white">Nombre y apellidos</label>
                    </div><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="email" placeholder="Correo electrónico" class="form-control bg-dark text-white border-dark" name="email" required value="<?php echo $_SESSION['email']; ?>" id="correo">
                        <label for="correo" class="text-white">Correo electronico</label><br> <button class="registro btn btn-outline-dark link-white" type="submit">Actualizar</button>
                    </div><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    
                </div>

            </div>
            </form>
            <a href="UsersController.php?action=inicio"><button class="btn btn-outline-dark link-white">Volver</button></a>

    </div>
    
   






</body>

</html>