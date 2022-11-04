<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro1 WHERE cod_clientes='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<?php include("./encabezado.php"); ?>
  <div class="container mt-5">
     <form action="update.php" method="POST">
            <input type="hidden" name="cod_clientes" value="<?php echo $row['cod_clientes']  ?>">
                                
          <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
          <input type="email" class="form-control mb-3" name="matricula" placeholder="correo" value="<?php echo $row['matricula']  ?>">
          <input type="text" class="form-control mb-3" name="passw" placeholder="Contraseña" value="<?php echo $row['passw']  ?>">
          <input type="submit" class="btn btn-primary btn-block" value="Actualizar">

                            <th><a href="delete.php?id=<?php echo $row['cod_clientes'] ?>" class="btn btn-danger">Eliminar</a></
                    </form>
                    
                </div>
    </body>
</html>