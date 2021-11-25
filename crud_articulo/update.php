<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$cantidad=$_POST['cantidad'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$descuento=$_POST['descuento'];

$sql="UPDATE articulo SET nombre='$nombre',marca='$marca',cantidad='$cantidad',descripcion='$descripcion',precio='$precio', descuento='$descuento' WHERE codigo='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        echo "<script>window.close();</script>";
    }else{
        echo "Hay un error";
    }
?>