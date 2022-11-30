<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
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
        <img src="../Public/Img/logopr.png" id="logo-seccion">
    </fieldset>
    <div id="dates">
        <fieldset>
            <legend>
                <h1> Registro de Usuario </h1>
            </legend>
        </fieldset>


        <form action="../Controllers/UsersController.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <input type="hidden" name="action" value="insertar">
                    <div class="form-floating">
                        <input placeholder="Nombre de usuario" class="form-control bg-dark  p-2 text-light border border-dark" name="nombre_usuario" required oninvalid="this.setCustomValidity('Por favor ingresa tu nombre')" autocomplete="off"><br>
                        <label for="floatingInput" class="text-secondary">Nombre Usuario</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="password" placeholder="Contraseña" class="form-control bg-dark  p-2 text-white border border-dark" name="contrasena" required><br>
                        <label for="floatingInput" class="text-secondary">Contraseña</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input placeholder="Nombre y Apellidos" class="form-control bg-dark  p-2 text-white border border-dark" name="nombre_apellidos" required autocomplete="off"><br>
                        <label for="floatingInput" class="text-secondary">Nombre y Apellidos</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="email" placeholder="Correo electrónico" class="form-control bg-dark  p-2 text-white border border-dark" name="email" required autocomplete="none"><br>
                        <label for="floatingInput" class="text-secondary">Correo Electrónico</label>
                    </div>
                </div>
            </div>
<div>
            <button class="btn btn-outline-dark" type="submit">Registrarse</button>
            </div><br>

            
            <div id="btn-contrasena">
                <a href="../index.html" class="registro btn btn-outline-dark link-white">Volver</u></a>
            </div>

    </div>

    </form>
    </div>



    <br>




</body>

</html>