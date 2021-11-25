<?php

include("conexion.php");
$con=conectar();

$ID=$_GET['id'];

$sql="DELETE FROM venta WHERE id_venta='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../venta.php");
    }else{
        echo "hay un error";
    }
?>
