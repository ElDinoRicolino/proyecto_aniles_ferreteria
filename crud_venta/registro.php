<link href="css/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div style="text-align: center; margin-top: 6%;">
    <div class="col-md-3" style="background: lavender; border-radius: 10px; padding: 20px; display: inline-block;">
        <h1>Venta</h1>
        <form action="insertar.php" method="POST">
            <p>Al terminar el registro reinicie la página</p>
            <input type="text" class="form-control mb-3" name="cliente" placeholder="ID del cliente">
            <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha de compra">
            <input type="text" class="form-control mb-3" name="codigo_art" placeholder="Código del articulo">
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
            <input type="text" class="form-control mb-3" name="id_empleado" placeholder="ID del empleado">
            <input type="text" class="form-control mb-3" name="total" placeholder="Precio total">
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>