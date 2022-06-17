<?php include("servicios.php") ?>
<?php include("includes/header.php") ?>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <span aria-hidden="true"></span>
                </div>
            <?php session_unset();
            }?>

            <div class="card card-body">
                <form action="insertarHorarios.php" method="POST">
                    <div class="form-group">
                        <h3>INGRESAR DATOS DEL PICO Y PLACA</h3>
                        <br>
                        <h6>INGRESAR EL ULTIMO DIGITO DE LA PLACA</h6>
                        <input type="number" name="digito" class="form-control" placeholder="Ingrese Ultimo Numero de la Placa" min="0" max="9" required>
                        <br>
                        <h6>SELECCIONAR EL DIA</h6>
                        <select name="dia" class="form-control" placeholder="Ingrese el Dia" required>
                            <option value="LUNES" selected>LUNES</option>
                            <option value="MARTES">MARTES</option>
                            <option value="MIERCOLES">MIERCOLES</option>
                            <option value="JUEVES">JUEVES</option>
                            <option value="VIERNES">VIERNES</option>
                            <option value="SABADO">SABADO</option>
                            <option value="DOMINGO">DOMINGO</option>
                        </select>
                        <br>
                        <h6>SELECCIONAR LA HORA DE INICIO</h6>
                        <input type="time" name="timeInicio" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <br>
                        <h6>SELECCIONAR LA HORA DE FIN</h6>
                        <input type="time" name="timefin" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Consultar" name="save_task">
                    <br>
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Digito</th>
                        <th>Dia</th>
                        <th>Horario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM horarios";
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
                                <?php echo $row['horario'] ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</main>

<?php include("includes/footer.php") ?>