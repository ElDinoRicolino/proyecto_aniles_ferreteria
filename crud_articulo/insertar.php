<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$cantidad=$_POST['cantidad'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$descuento=$_POST['descuento'];

$sql="INSERT INTO articulo(`nombre`, `marca`, `cantidad`, `descripcion`, `precio`, `descuento`) VALUES('$nombre','$marca','$cantidad','$descripcion','$precio','$descuento')";
$query= mysqli_query($con,$sql);

if($query){
    echo "<script>window.close();</script>";
}else {
    echo "Hay un problema";
}
?>