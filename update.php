<?php

include("conexion.php");
$con=conectar();

$cod_clientes=$_POST['cod_clientes'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$passw=$_POST['passw'];

$sql="UPDATE registro1 SET nombre='$nombre',matricula='$matricula' WHERE cod_clientes='$cod_clientes'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro1.php");
    }
?>