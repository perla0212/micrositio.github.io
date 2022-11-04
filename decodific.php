<?php
 include ('conexion.php');

 $con=conectar();

    $cod_clientes=$_GET['id'];
    $result = mysqli_query($con,"select * from registro1 where cod_clientes = '$cod_clientes'");
    $row = mysqli_fetch_assoc($result);
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     

        //$nombre=$_POST['nombre'];
        //$matricula=$_POST['matricula'];
        $passw=$_POST['passw'];

      //Encritamiento en la base de datos
      $passw = openssl_decrypt($passw,"AES-256-ECB","M2M3M2");
  
        //$resultt = mysqli_query($con,"update alumno set nombre = '$nombre', matricula = '$matricula', passw = '$passw' where cod_clientes = '$cod_clientes'");
        $resultt = mysqli_query($con,"update registro1 set  passw = '$passw' where cod_clientes = '$cod_clientes'");
        if($resultt){
        header('location: registro1.php');
        }
    }



 ?>

<?php include("./encabezado.php"); ?>
<div class="container mt-5">
    <form method="POST">

        <!-- <input type="hidden" name="cod_clientes" value="<?php echo $row['cod_clientes']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula" value="<?php echo $row['matricula']  ?>"> -->
        <input type="text" class="form-control mb-3" name="passw" placeholder="Contraseña"
            value="<?php echo $row['passw']  ?>">



        <input type="submit" class="btn btn-primary btn-block" value="Desifrar">

    </form>

</div>
</body>

</html>