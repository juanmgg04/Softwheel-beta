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
    <title>Actualizar Contraseña</title>
    <!-- http://127.0.0.1:5501/pg3.html -->
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
            <h1> Actualizar Contraseña </h1>
        </legend>
    </fieldset>
    <div class="container" id="dates">
        <form action="../Controllers/UsersController.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">


                    <!-- <input type="password" placeholder="Contraseña Actual" class="form-control bg-dark  text-white border-dark " name="contrasena" required oninvalid="this.setCustomValidity('Ingrese contraseña actual')" id="contrasena"> -->
                    <input type="hidden" name="action" value="Insertar">
                    <br>
                    <input type="hidden" name='id' value='<?php echo $_SESSION['id'] ?>'>

                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">

                    <input type="password" placeholder="Contraseña nueva" class="form-control bg-dark  text-white border-dark" name="contrasena" required id="con"><br>
                    <input type="checkbox" onclick="vercontrasena()" class=""><span> </span> Ver contraseña<br><br>

                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">

                    <!-- <input type="password" placeholder="Repetir contraseña" class="form-control bg-dark text-white border-dark" name="" required id="pass2"> -->
                    <br><button class="registro btn btn-outline-dark link-white" type="submit">Actualizar</button>
                    <br><br>
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


    <script>
        function vercontrasena(){
      var x = document.getElementById('con');
      if(x.type==="password"){
        x.type="text";
      }
      else{
        x.type="password";
      }
    }
        
    </script>







</body>

</html>