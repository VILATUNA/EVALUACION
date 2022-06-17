<?php

include("db.php");
//OPTIENE DATOS Y LOS ENVIA AL FORMULARIO PARA EDITARLOS
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM horarios WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $digito = $row['ultimoDigito'];
        $dia = $row['dia'];
        $timeInicioD = $row['inicioManana'];
        $timefinD = $row['finManana'];
        $timeInicioT = $row['inicioTarde'];
        $timefinT = $row['finTarde'];
    }
}

//EDITA LOS DATOS Y LOS ENVIA A LA BASE DE DATOS
if (isset($_POST['update'])) {

    $id = $_GET['id'];
    $digito = $_POST['digito'];
    $dia = strtoupper($_POST['dia']);
    $timeInicioD = $_POST['timeInicioD'];
    $timefinD = $_POST['timefinD'];
    $timeInicioT = $_POST['timeInicioT'];
    $timefinT = $_POST['timefinT'];


    $query = "UPDATE horarios SET ultimoDigito='$digito', dia='$dia', inicioManana='$timeInicioD', finManana='$timefinD', inicioTarde='$timeInicioT', finTarde='$timefinT' WHERE id = $id";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Consulta Fallida");
    }

    $_SESSION['message'] = 'Actualizado Correctamente';
    $_SESSION['message_type'] = 'success';
    header("Location: configPicoYPlaca.php");
}
?>

<?php include("includes/header.php") ?>

<!--FORMULARIO DONDE SE PONE DATOS A EDITAR-->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
                    <div class="form-group">
                        <h3>EDITAR DATOS</h3>
                        <br>
                        <h6>INGRESAR EL ULTIMO DIGITO DE LA PLACA</h6>
                        <input type="number" name="digito" value="<?php echo $digito ?>" class="form-control" placeholder="Ingrese Ultimo Numero de la Placa" min="0" max="9" readonly>
                        <h6>SELECCIONAR EL DIA</h6>
                        <select name="dia" class="form-control" placeholder="Ingrese el Dia" readonly>
                            <option value="<?php echo $dia ?>">DEJAR ORIGINAL (<?php echo $dia ?>)</option>
                            <option value="LUNES">LUNES</option>
                            <option value="MARTES">MARTES</option>
                            <option value="MIERCOLES">MIERCOLES</option>
                            <option value="JUEVES">JUEVES</option>
                            <option value="VIERNES">VIERNES</option>
                            <option value="SABADO">SABADO</option>
                            <option value="DOMINGO">DOMINGO</option>
                        </select>
                        <h6>RESTRICCION AL INICIO DIA</h6>
                        <input type="time" name="timeInicioD" min="04:00" max="11:00" value="<?php echo $timeInicioD ?>" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <h6>RESTRICCION AL FIN DIA</h6>
                        <input type="time" name="timefinD" min="04:00" max="11:00" value="<?php echo $timefinD ?>" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <h6>RESTRICCION AL INICIO TARDE</h6>
                        <input type="time" name="timeInicioT" min="16:00" max="22:00" value="<?php echo $timeInicioT ?>" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <h6>RESTRICCION AL FIN TARDE</h6>
                        <input type="time" name="timefinT" min="16:00" max="22:00" value="<?php echo $timefinT ?>" class="form-control" placeholder="Ingrese el Horario de Pico y Placa" required>
                        <br>
                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>