<?php

include('../app/config.php');


//cargar el encabezado
$query_informacions = $pdo->prepare("SELECT * FROM tb_informaciones WHERE estado = '1' ");
$query_informacions->execute();
$informacions = $query_informacions->fetchAll(PDO::FETCH_ASSOC);
foreach($informacions as $informacion){
    $id_informacion = $informacion['id_informacion'];
    $nombre_parqueo = $informacion['nombre_parqueo'];
    $actividad_empresa = $informacion['actividad_empresa'];
    $sucursal = $informacion['sucursal'];
    $direccion = $informacion['direccion'];
    $zona = $informacion['zona'];
    $telefono = $informacion['telefono'];
    $departamento_ciudad = $informacion['departamento_ciudad'];
    $pais = $informacion['pais'];
}


/////////// rescatar la informacion de la factura
$query_fascturas = $pdo->prepare("SELECT * FROM tb_facturaciones WHERE estado = '1' ");
$query_fascturas->execute();
$facturas = $query_fascturas->fetchAll(PDO::FETCH_ASSOC);
foreach($facturas as $factura){
    $id_facturacion = $factura['id_facturacion'];
    $id_informacion = $factura['id_informacion'];
    $nro_factura = $factura['nro_factura'];
    $id_cliente = $factura['id_cliente'];
    $fecha_factura = $factura['fecha_factura'];
    $fecha_ingreso = $factura['fecha_ingreso'];
    $hora_ingreso = $factura['hora_ingreso'];
    $fecha_salida = $factura['fecha_salida'];
    $hora_salida = $factura['hora_salida'];
    $tiempo = $factura['tiempo'];
    $cuviculo = $factura['cuviculo'];
    $detalle = $factura['detalle'];
    $precio = $factura['precio'];
    $cantidad = $factura['cantidad'];
    $total = $factura['total'];
    $monto_total = $factura['monto_total'];
    $monto_literal = $factura['monto_literal'];
    $user_sesion = $factura['user_sesion'];
    
}


/////////////////////// rescatando los datos del cliente//////////////////////////////////
$query_clientes = $pdo->prepare("SELECT * FROM tb_clientes WHERE id_cliente = '$id_cliente' AND estado = '1'  ");
$query_clientes->execute();
$datos_clientes = $query_clientes->fetchAll(PDO::FETCH_ASSOC);
foreach($datos_clientes as $datos_cliente){
    $id_cliente = $datos_cliente['id_cliente'];
    $nombre_cliente = $datos_cliente['nombre_cliente'];
    $nit_ci_cliente = $datos_cliente['nit_ci_cliente'];
    $placa_auto = $datos_cliente['placa_auto'];
}
/////////////////////////////////////////////////////////////////////////////////////////////




