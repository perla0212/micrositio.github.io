<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM registro1";
$query = mysqli_query($con, $sql);
?>
<?php include("encabezado.php"); ?>

<div style="margin-left: 30%; margin-right:30%;">

    <form action="insertar.php" method="POST">

        <label for="cod_clientes"><b>Codigo:</b></label><input type="number" required class="form-control mb-3"
            name="cod_clientes">
        <label for="nombre"><b>Nombre Completo:</b></label><input type="text" required class="form-control mb-3"
            name="nombre">
        <label for="matricula"><b>Correo:</b></label><input type="email" required class="form-control mb-3"
            name="matricula">
        <label for="passw"><b>Contraseña:</b></label><input type="password" class="form-control mb-3" name="passw"
            id="contrasenia">

        <input type="submit" class="btn btn-primary">
    </form>


</div>
<div class="container mt-5">
    <div class="row">

       

        <center>
            <div class="col-md-8">
                <table class="table table-dark table-sm">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Contraseña</th>
                            <th>Acciones</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $row['cod_clientes'] ?></th>
                            <th><?php echo $row['nombre'] ?></th>
                            <th><?php echo $row['matricula'] ?></th>
                            <th><?php echo $row['passw'] ?></th>
                            <th><a href="delete.php?id=<?php echo $row['cod_clientes'] ?>"
                                    class="btn btn-danger">Eliminar</a></th>
                            <th><a href="codific.php?id=<?php echo $row['cod_clientes'] ?>"
                                    class="btn btn-info">cifrar</a></th>
                            <th><a href="decodific.php?id=<?php echo $row['cod_clientes'] ?>"
                                    class="btn btn-primary">Descifrar</a></th>

                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div> <br><br>
        </center>
    </div>
</div>
</body>

</html>