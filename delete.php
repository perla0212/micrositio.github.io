<?php

include("conexion.php");
$con=conectar();

$cod_clientes=$_GET['id'];

$sql="DELETE FROM registro1 WHERE cod_clientes='$cod_clientes'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro1.php");
    }
?>
