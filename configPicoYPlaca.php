<!--IMPORTAMOS LAS CLASES-->
<?php include("includes/header.php") ?>
<?php include("db.php"); ?>

<!-- PRIME CONTAINER-->
<main class="container p-4">
    <div class="row">
        <!-- FORMULARIO DE REGISTRO-->
        <div class="col-md-4">
            <!-- MENSAJES DE ERROR Y EXITO-->
            <?php if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <span aria-hidden="true"></span>
                </div>
            <?php session_unset();
            } ?>

            <div class="card card-body">
                <form action="insert.php" method="POST">
                    <div class="form-group">
                        <h3>INGRESAR DATOS DEL PICO Y PLACA</h3>
                        <br>
                        <h6>INGRESAR EL ULTIMO DIGITO DE LA PLACA</h6>
                        <input type="number" name="digito" class="form-control" placeholder="Ingrese Ultimo Numero de la Placa" min="0" max="9" required>
                        <h6>SELECCIONAR EL DIA</h6>
                        <select name="dia" class="form-control" placeholder="Ingrese el Dia" required>
                            <option value="LUNES">LUNES</option>
                            <option value="MARTES">MARTES</option>
                            <option value="MIERCOLES">MIERCOLES</option>
                            <option value="JUEVES">JUEVES</option>
                            <option value="VIERNES">VIERNES</option>
                            <option value="SABADO">SABADO</option>
                            <option value="DOMINGO">DOMINGO</option>
                        </select>
                        <h6>RESTRICCION INICIO DIA</h6>
                        <input type="time" name="timeInicioD" value="04:00" min="04:00" max="11:00" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <h6>RESTRICCION FIN DIA</h6>
                        <input type="time" name="timefinD" value="11:00" min="04:00" max="11:00" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <h6>RESTRICCION INICIO TARDE</h6>
                        <input type="time" name="timeInicioT" value="16:00" min="16:00" max="22:00" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <h6>RESTRICCION FIN TARDE</h6>
                        <input type="time" name="timefinT" value="22:00" min="16:00" max="22:00" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="INGRESAR" name="save_task">
                    <br>
                </form>
            </div>
        </div>
        <!-- TABLA CON DATOS PARA FUNCIONES CRUD-->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Digito</th>
                        <th>Dia</th>
                        <th>Restriccion Dia</th>
                        <th>Restriccion Tarde</th>
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
                                <?php echo ' Desde ' . $row['inicioManana'] . ' Hasta ' . $row['finManana'] ?>
                            </td>
                            <td>
                                <?php echo ' Desde ' . $row['inicioTarde'] . ' Hasta ' . $row['finTarde'] ?>
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