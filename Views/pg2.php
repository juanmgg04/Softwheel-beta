<?php 

$usuario= $_SESSION['nombre_usuario'];
$id = $_SESSION['id'];

if($usuario==null || $usuario==''){

  echo '<script language="javascript">alert("Debes iniciar sesión.");window.location.href="UsersController.php?action=login"</script>';

  

  die();

}

else{
    include '../Config/Conexion.php';
    $conexion = new Conexion();
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $consulta = $conexion->stm->prepare($sql);
    $consulta->execute();
    $persona = $consulta->fetchAll(PDO::FETCH_OBJ);
    foreach($persona as $u){}}
   
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Softwheels</title>
    <link rel="stylesheet" href="../Public/Css/style2.css">
    <link rel="stylesheet" href="../Public/Css/ventana.css">

  
    <script src="../Public/JS/pg2.js"></script>

</head>

<body class="text-bg-secondary p-3" >


<div class="ventana" id='vent'>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" onclick="cerrarvent()" style="float: right ;"></button>
    <h5>Valide sus datos para cambiar contraseña</h5>
    
    <form  action="UsersController.php" method="POST">

        <div class="container-fluid" id="dates">
           
                   
        <input type="hidden" name="action" value="verificarUser">
                        
                    <img src="../Public/Img/person_FILL0_wght400_GRAD0_opsz48.png" id="usuario">
                        
                    <input placeholder="Usuario" class="form-control bg-dark text-white border-dark" name="nombre_usuario" required><br>
                    <img src="../Public/Img/lock_FILL0_wght400_GRAD0_opsz48.png" id="contraseña">
                    <input type="password" placeholder="Contraseña" class="form-control bg-dark  p-2 text-white border border-dark" name="contrasena" required id="con"><br>
                    <input type="checkbox" onclick="vercontrasena()" class=""><label for="">Mostrar contraseña</label><br><br>
               
                
            
            
        </div>
        
        
        <button  id="inicio" class="btn btn-outline-dark" type="submit">Listo</button>
        
    </form>
  </div>

  
    
    <nav class="navbar  fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand " href="#"></a>
          <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title bg-linght text-light" id="offcanvasNavbarLabel"><b>USUARIO</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active bg-linght text-light" aria-current="page" href="UsersController.php?action=cerrarsesion"><b>Cerrar Sesión</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#" onclick="eliminar(<?php echo $_SESSION['id']; ?>)" ><b>Eliminar Cuenta</b></a>
               </li>
                
               </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                    <b>Actualizar Datos</b>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" id="datos">
                    <li>Nombre de Usuario:</li>
                    <?php echo $_SESSION['nombre_usuario'];?><br><br>
                    <li>Nombre y Apellidos: </li>
                    <?php echo $_SESSION['nombre_apellidos'];?><br><br>
                    <li>Correo:</li>
                    <?php echo $_SESSION['email'];?><br><br>
                    <a href="UsersController.php?action=actualizarusuario">               
                    <button class='btn btn-secondary' style="text-align: center">Actualizar datos</button></a>
                    <a class="nav-link text-light" href="javascript:abrir()"><button class='btn btn-secondary' style="text-align: center" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">Actualizar contraseña</button></a>
                    
                    
                    
                   
                    
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
   
    

      <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>


    <div class="row">

           
        <div class="col-md-4">
            <img src="../Public/Img/logopr.png" id="logo">
        </div>
    </div>
    

    <h1>¿Qué deseas hacer?</h1><br>

    
        <div class="row">

           
                
            
            <div class="col-md-4">

            </div>
            <a href="../Views/principal.php" class="btn btn-dark col-md-4">Registrar ingreso de vehículo</a>

        </div><br>

        <div class="row">
            <div class="col-md-4">

            </div>
            <a href="UsersController.php?action=historial" class="btn btn-dark col-md-4">Historial de ingreso</a>
        </div>


        
        </form>





        


        <script src="../Public/JS/sweetalert.min.js"></script>

        <script>

          function eliminar(id)
       {
          swal({
          title: "¿Estás seguro?",
          text: "Una vez eliminado no se podrá recuperar la cuenta",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("La cuenta se eliminó con éxito", {
              icon: "success",
            });
         
            location.href = '../Views/pg16.php?id=' + id;


          } else {
            swal("La cuenta no fue eliminada");
          }
        });
            }
            function abrir() {
      document.getElementById("vent").style.display = "block"
    }

    function cerrarvent() {
      document.getElementById("vent").style.display = "none"
    }

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