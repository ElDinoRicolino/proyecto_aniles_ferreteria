<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM articulo";
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
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Cantidad</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Descuento(%)</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $row['codigo'] ?></th>
                            <th><?php echo $row['nombre'] ?></th>
                            <th><?php echo $row['marca'] ?></th>
                            <th><?php echo $row['cantidad'] ?></th>
                            <th><?php echo $row['descripcion'] ?></th>
                            <th><?php echo $row['precio'] ?></th>
                            <th><?php echo $row['descuento'] ?></th>
                            <th><a target="_blank" href="crud_articulo/actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="crud_articulo/delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>