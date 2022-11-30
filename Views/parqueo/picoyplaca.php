<?php
include('../app/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Public/Css/bootstrap.min.css">
    <?php include('../layout/admin/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include('../layout/admin/menu.php'); ?>
        <div class="content-wrapper">
            <br>
            <div class="container">


                <h2>PICO Y PLACA</h2> <br>
                <div class="card-body" style="display: block;">

                    <table id="table_id" class="table table-bordered table-sm table-striped">
                        <thead>
                            <th>Días</th>
                            <th>Carros</th>
                            <th>Motos</th>


                        </thead>
                        <tbody>

                            <tr>
                                <td>Lunes</td>
                                <td>6-3</td>
                                <td>6-3</td>
                            </tr>
                            <tr>
                                <td>Martes</td>
                                <td>9-8</td>
                                <td>9-8</td>
                            </tr>
                            <tr>
                                <td>Miércoles</td>
                                <td>4-5</td>
                                <td>4-5</td>
                            </tr>
                            <tr>
                                <td>Jueves</td>
                                <td>7-1</td>
                                <td>7-1</td>
                            </tr>
                            <tr>
                                <td>Viernes</td>
                                <td>2-0</td>
                                <td>2-0</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
            <!-- /.content-wrapper -->
            <?php include('../layout/admin/footer.php'); ?>
        </div>
        <?php include('../layout/admin/footer_link.php'); ?>
    
</body>

</html>