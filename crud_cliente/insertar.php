<?php
include("conexion.php");
$con=conectar();

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$correo2=$_POST['correo2'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO cliente(`nombres`, `apellidos`, `direccion`, `correo`, `correo2`, `telefono`) VALUES('$nombres','$apellidos','$direccion','$correo','$correo2','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    echo "<script>window.close();</script>";
}else {
    echo "Hay un problema";
}
?>