<?php

$usuario= $_SESSION['nombre_usuario'];

if($usuario==null || $usuario==''){

  echo '<script language="javascript">alert("Debes iniciar sesión.");window.location.href="UsersController.php?action=login"</script>';
  

  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e6a247fa57.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Public/Css/style2.css">
</head>

<body>
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
    
    <h1 id="historial">Historial</h1>



    <?php
include('../Views/app/config.php');
 include('../Views/layout/admin/head.php');
?>
    <script>
                $(document).ready(function() {
                    $('#table_id').DataTable( {
                        "pageLength": 5,
                        "language": {
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
                            "infoEmpty": "Mostrando 0 a 0 de 0 Clientes",
                            "infoFiltered": "(Filtrado de _MAX_ total Clientes)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Clientes",
                            "loadingRecords": "Cargando...",
                            "processing": "Procesando...",
                            "search": "Buscador:",
                            "zeroRecords": "Sin resultados encontrados",
                            "paginate": {
                                "first": "Primero",
                                "last": "Ultimo",
                                "next": "Siguiente",
                                "previous": "Anterior"
                            }
                        }
                    });
                } );
            </script>



            <div class="row ">
                <div class="col-md-12">

                    <div class="card card-outline card">
                        <div class="card-header">
                            <h3 class="card-title">Historial de ingreso</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">

                            <table id="table_id" class="table table-bordered table-sm table-striped">
                                <thead>
                                <th>Nro</th>
                                <th>Nombre del cliente</th>
                                <th>Identificación</th>
                                <th>Placa del auto</th>
                                <th>Fecha y hora de ingreso</th>
                                <th>Fecha de salida</th>
                                <th>Hora de salida</th>
              
                                </thead>
                                <tbody>
                                <?php
                                $contador_cliente = 0;
                                $query_clientes = $pdo->prepare("SELECT tb_tickets.nombre_cliente, tb_tickets.nit_ci, tb_tickets.placa_auto, tb_tickets.fyh_creacion, tb_facturaciones.fecha_salida, tb_facturaciones.hora_salida FROM tb_facturaciones JOIN
                                tb_tickets ON tb_facturaciones.id_ticket = tb_tickets.id_ticket");
                                $query_clientes->execute();
                                $datos_clientes = $query_clientes->fetchAll(PDO::FETCH_ASSOC);
                                foreach($datos_clientes as $datos_cliente){
                                    $contador_cliente = $contador_cliente + 1;
                                    $nombre_cliente = $datos_cliente['nombre_cliente'];
                                    $nit_ci_cliente = $datos_cliente['nit_ci'];
                                    $placa_auto = $datos_cliente['placa_auto'];
                                    $fyhcreacion = $datos_cliente['fyh_creacion'];
                                    $fsalida = $datos_cliente['fecha_salida'];
                                    $hsalida = $datos_cliente['hora_salida'];
                
                
                                    ?>
                                    <tr>
                                        <td><center><?php echo $contador_cliente;?></center></td>
                                        <td><?php echo $nombre_cliente;?></td>
                                        <td><?php echo $nit_ci_cliente;?></td>
                                        <td><?php echo $placa_auto;?></td>
                                        <td><?php echo $fyhcreacion;?></td>
                                        <td><?php echo $fsalida;?></td>
                                        <td><?php echo $hsalida;?></td>

                                        
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>

                        </div>

                    </div>

              
                </div>
            </div>

       
    </div>

    <div class="buttons"><br>
        <a href="../Controllers/UsersController.php?action=inicio"><button class="btn btn-outline-dark link-white ">Volver</button></a>
    </div><br>
</body>

</html>