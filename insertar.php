<?php
include("conexion.php");
$con=conectar();

$cod_clientes=$_POST['cod_clientes'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$passw=$_POST['passw'];

$passw = openssl_encrypt($passw,"AES-256-ECB","M2M3M2");

//$passw = openssl_descrypt($nombre,"AES-256-ECB","M2M3M2");

//$nombre = openssl_descrypt($nombre,"AES-256-ECB","Perla");


$sql="INSERT INTO registro1 VALUES('$cod_clientes','$nombre','$matricula','$passw')";
$query= mysqli_query($con,$sql);



if($query){
    Header("Location: registro1.php");
    
}else {
}

?>