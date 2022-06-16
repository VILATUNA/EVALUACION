<?php include("servicios.php") ?>
<?php include("includes/header.php") ?>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form name="formularioDatos" action="index.php" method="post">
                    <div class="form-group">
                        <h5>INGRESE EL ULTIMO NUMERO DE SU PLACA</h5>
                        <br>
                        <input type="text" name="title" class="form-control" placeholder="Ingrese Ultimo Numero de la Placa" autofocus>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Consultar" name="save_task">
                    <br>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <?php $numero = $_POST['title']; ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Dias que PUEDE Circular</th>
                        <th>Horarios</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo diasTransitables($numero); ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Dias que NO PUEDE Circular</th>
                        <th>Horarios</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $numero = $_POST['title']; ?>
                    <tr>
                        <td><?php echo diasNoTransitables($numero); ?></td>
                        <td><?php echo horarioNoCircula($numero); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-body">
                <form name="formularioDatos" action="index.php" method="post">
                    <div class="form-group">
                        <h5>Editar Horaios</h5>
                        <br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Dia</th>
                                    <th>Horario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (editarHorario() as $key => $row) {
                                    $id[$key] = $row['id'];
                                    $dia[$key] = $row['Dia'];
                                    $horario[$key] = $row['Horario']; ?>
                                    <tr>
                                        <td><?php echo $id[$key]; ?> </td>
                                        <td><?php echo $dia[$key]; ?> </td>
                                        <td><?php echo $horario[$key]; ?> </td>
                                        <td> <a href="edit.php?id=<?php echo $numero ?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                                            <a href="index.php?id=<?php echo $id ?>" class="btn btn-danger"><i class="fas fa-trash-alt"> <?php echo eliminar($id) ?> </i></a>
                                        </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

<?php include("includes/footer.php") ?>