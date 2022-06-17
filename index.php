<!--IMPORTAMOS CLASES-->
<?php include("includes/header.php") ?>
<?php include("db.php");
//CREAMOS UNA LISTA PARA PODER FILTAR LOS DIAS DE RESTRICCION
$array = array("LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO", "DOMINGO");
?>
<!-- FORMULARIO DE BUSQUEDA-->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form method="POST">
                    <div class="form-group">
                        <h3>CONSULTAR PICO Y PLACA</h3>
                        <br>
                        <h6>INGRESAR EL ULTIMO DIGITO DE LA PLACA</h6>
                        <input type="number" name="digito" class="form-control" placeholder="Ingrese Ultimo Numero de su Placa" min="0" max="9" required>
                        <br>
                        <button class="btn btn-success" name="buscar">Consultar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <!--TABLA DE NO CIRCULA-->
            <h3>NO PUEDE CIRCULAR</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Digito</th>
                        <th>Dia</th>
                        <th>Restriccion Dia</th>
                        <th>Restriccion Tarde</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $digito = $_POST['digito']; ?>
                    <?php
                    $query = "SELECT * FROM horarios where ultimoDigito=$digito ORDER BY dia ASC";
                    $cosulta = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($cosulta)) { ?>
                        <tr>
                            <td>
                                <?php echo $row['ultimoDigito'] ?>
                            </td>
                            <td>
                                <?php echo $row['dia'] ?>
                            </td>
                            <td>
                                <?php echo ' Desde ' . $row['inicioManana'] . ' Hasta ' . $row['finManana'] ?>
                            </td>
                            <td>
                                <?php echo ' Desde ' . $row['inicioTarde'] . ' Hasta ' . $row['finTarde'] ?>
                            </td>
                        </tr>

                    <?php
                        $clave = array_search($row['dia'], $array);
                        unset($array[$clave]);
                    } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!--TABLA DE SI CIRCULA-->
<div class="container p-4">
    <div class="col-md-8">
        <h3>PUEDE CIRCULAR</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Digito</th>
                    <th>Dia</th>
                    <th>Circulacion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($array as $v) {
                ?>
                    <tr>
                        <td>
                            <?php echo $digito ?>
                        </td>
                        <td>
                            <?php echo $v ?>
                        </td>
                        <td>
                            <?php echo ' Todo el Dia ' ?>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</div>

<?php include("includes/footer.php") ?>