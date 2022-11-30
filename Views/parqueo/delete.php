<?php

$mapeo = $_GET['id_map'];
    include '../../Config/Conexion.php';
    $conexion = new conexion();
    $sql = "DELETE FROM tb_mapeos WHERE id_map=$mapeo";
    $borrar = $conexion->stm->prepare($sql);
    $borrar->execute();

    header("location: mapeo-de-vehiculos.php");

?>