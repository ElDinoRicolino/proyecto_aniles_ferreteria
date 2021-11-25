<?php
    include("conexion.php");
    $con = conectar();

    $id = $_GET['id'];

    $sql = "SELECT * FROM venta WHERE id_venta='$id'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            <p>Después de actualizar recargar la página</p>
            <input type="hidden" class="form-control mb-3" name="id" placeholder="ID" value="<?php echo $row['id_venta']  ?>">
            <input type="text" class="form-control mb-3" name="cliente" placeholder="ID del cliente" value="<?php echo $row['id_cliente']  ?>">
            <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha de compra" value="<?php echo $row['fecha']  ?>">
            <input type="text" class="form-control mb-3" name="codigo" placeholder="Código del artículo" value="<?php echo $row['codigo_art']  ?>">
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">
            <input type="text" class="form-control mb-3" name="empleado" placeholder="ID del empleado" value="<?php echo $row['id_empleado']  ?>">
            <input type="text" class="form-control mb-3" name="total" placeholder="Precio total" value="<?php echo $row['total']  ?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>
</html>