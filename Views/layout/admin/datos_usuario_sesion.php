<?php

// session_start();
if(isset($_SESSION['usuario_sesion'])) {
    $usuario_sesion = $_SESSION['nombre_usuario'];

    $query_usuario_sesion = $pdo->prepare("SELECT * FROM usuarios WHERE nombre_usuario = '$usuario_sesion' ");
    $query_usuario_sesion->execute();
    $usuarios_sesions = $query_usuario_sesion->fetchAll(PDO::FETCH_ASSOC);
    foreach($usuarios_sesions as $usuarios_sesion){
        $id_user_sesion = $usuarios_sesion['id'];
        $nombres_sesion = $usuarios_sesion['nombre_apellidos'];
        $email_sesion = $usuarios_sesion['email'];
        

    }
}

//echo "Bienvenido Administrador";

?>