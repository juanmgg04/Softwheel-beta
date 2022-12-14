<?php
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('../layout/admin/head.php'); ?>
    <script src="../../Public/JS/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include('../layout/admin/menu.php'); ?>
    <div class="content-wrapper">
        <br>
        <div class="container">

            <h2>Listado de espacios</h2>

            <br>

            <script>
                $(document).ready(function() {
                    $('#table_id').DataTable( {
                        "pageLength": 5,
                        "language": {
                            "emptyTable": "No hay información",
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Espacios",
                            "infoEmpty": "Mostrando 0 a 0 de 0 Espacios",
                            "infoFiltered": "(Filtrado de _MAX_ total Espacios)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Espacios",
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
<!-- <form action="" method="get"> -->
            <div class="row">
                <div class="col-md-6">
                    <table id="table_id" class="table table-bordered table-sm table-striped">
                       <thead>
                       <th><center>Nro</center></th>
                       <th>Nro espacio</th>
                       <th><center>Acción</center></th>
                       </thead>
                        <tbody>
                        <?php
                        $contador = 0;
                        $query_mapeos = $pdo->prepare("SELECT * FROM tb_mapeos WHERE estado = '1' ");
                        $query_mapeos->execute();
                        $mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
                        foreach($mapeos as $mapeo){
                            $id_map = $mapeo['id_map'];
                            $nro_espacio = $mapeo['nro_espacio'];
                            $contador = $contador + 1;
                            ?>
                            <tr>
                                <td><center><?php echo $contador;?></center></td>
                                <td><?php echo $nro_espacio;?></td>
                                <td>
                                    <center>
                                        <button onclick="borrar('<?php echo $mapeo['id_map']; ?>')" class="btn btn-danger">Borrar</button>
                                    </center> 
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                <!-- </form> -->
                </div>
            </div>

        </div>

    </div>
    <!-- /.content-wrapper -->
    <?php include('../layout/admin/footer.php'); ?>
</div>
<?php include('../layout/admin/footer_link.php'); ?>

<script>
  function borrar(id_map){
                swal({
                    title: "¿Está seguro que desea eliminar",
                    text: "Si borra el espacio no se puede recuperar",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        swal("El espacio se eliminó con éxito", {
                        icon: "success",
                        });

                        location.href = 'delete.php?id_map=' + id_map;


                    } else {
                        swal("El espacio no se eliminó");
                    }
                    });
            }
</script>
</body>
</html>

