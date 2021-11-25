<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$correo2=$_POST['correo2'];
$telefono=$_POST['telefono'];

$sql="UPDATE cliente SET nombres='$nombres',apellidos='$apellidos',direccion='$direccion',correo='$correo',correo2='$correo2', telefono='$telefono' WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        echo "<script>window.close();</script>";
    }else{
        echo "Hay un error";
    }
?>