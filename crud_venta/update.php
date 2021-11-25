<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$cliente=$_POST['cliente'];
$fecha=$_POST['fecha'];
$codigo=$_POST['codigo'];
$direccion=$_POST['direccion'];
$empleado=$_POST['empleado'];
$total=$_POST['total'];

$sql="UPDATE venta SET id_cliente='$cliente',fecha='$fecha',codigo_art='$codigo',direccion='$direccion',id_empleado='$empleado', total='$total' WHERE id_venta='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        echo "<script>window.close();</script>";
    }else{
        echo "Hay un error";
    }
?>