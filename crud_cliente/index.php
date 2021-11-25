<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM cliente";
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
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Correo2</th>
                        <th>Telefono</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $row['idCliente'] ?></th>
                            <th><?php echo $row['nombres'] ?></th>
                            <th><?php echo $row['apellidos'] ?></th>
                            <th><?php echo $row['direccion'] ?></th>
                            <th><?php echo $row['correo'] ?></th>
                            <th><?php echo $row['correo2'] ?></th>
                            <th><?php echo $row['telefono'] ?></th>
                            <th><a target="_blank" href="crud_cliente/actualizar.php?id=<?php echo $row['idCliente'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="crud_cliente/delete.php?id=<?php echo $row['idCliente'] ?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>