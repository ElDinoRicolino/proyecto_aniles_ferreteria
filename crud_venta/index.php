<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM venta";
$query = mysqli_query($con, $sql);
?>
<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-2">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>IDVenta</th>
                        <th>idCliente</th>
                        <th>Fecha</th>
                        <th>Codigo_art</th>
                        <th>Direccio</th>
                        <th>idEmpleado</th>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $row['id_venta'] ?></th>
                            <th><?php echo $row['id_cliente'] ?></th>
                            <th><?php echo $row['fecha'] ?></th>
                            <th><?php echo $row['codigo_art'] ?></th>
                            <th><?php echo $row['direccion'] ?></th>
                            <th><?php echo $row['id_empleado'] ?></th>
                            <th><?php echo $row['total'] ?></th>
                            <th><a target="_blank" href="crud_venta/actualizar.php?id=<?php echo $row['id_venta'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="crud_venta/delete.php?id=<?php echo $row['id_venta'] ?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>