<?php
    
    $id = $_POST['id'];
    $contrasena = $_POST['contrasena'];
    
    include '../Config/Conexion.php';

    $conexion = new Conexion();
   
    $sql = "UPDATE usuarios SET contrasena='$pass1' WHERE id=$id";
    $insertar = $conexion->stm->prepare($sql);
    $insertar->execute();

    header('location: UsersController.php?action=login');
    
    ?> 