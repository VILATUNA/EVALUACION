<?php 
include("db.php");

if (isset($_POST['save_task'])){
    $digito = $_POST['digito'];
    $dia = strtoupper($_POST['dia']);
    $timeInicio = $_POST['timeInicio'];
    $timefin = $_POST['timefin'];
    
    $horario = strtoupper(' Desde '.$timeInicio.' Hasta '.$timefin);
$query= "INSERT INTO horarios(ultimoDigito, dia, horario) VALUES ('$digito','$dia','$horario')";
$result = mysqli_query($conn, $query);
if(!$result){
   die("Consulta Fallida");
}

$_SESSION['message']='Guardado Correctamente';
$_SESSION['message_type']='success';

header("Location: index.php");
}
?>