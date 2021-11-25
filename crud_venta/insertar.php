<?php
include("conexion.php");
$con=conectar();

$cliente=$_POST['cliente'];
$fecha=$_POST['fecha'];
$codigo=$_POST['codigo_art'];
$direccion=$_POST['direccion'];
$empleado=$_POST['id_empleado'];
$total=$_POST['total'];

$sql="INSERT INTO venta(`id_cliente`, `fecha`, `codigo_art`, `direccion`, `id_empleado`, `total`) VALUES('$cliente','$fecha','$codigo','$direccion','$empleado','$total')";
$query= mysqli_query($con,$sql);

if($query){
    echo "<script>window.close();</script>";
}else {
    echo "Hay un problema";
}
?>