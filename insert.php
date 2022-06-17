<?php 
include("db.php");

if (isset($_POST['save_task'])){
    $digito = $_POST['digito'];
    $dia = strtoupper($_POST['dia']);
    $timeInicioD = $_POST['timeInicioD'];
    $timefinD = $_POST['timefinD'];
    $timeInicioT = $_POST['timeInicioT'];
    $timefinT = $_POST['timefinT'];

$query= "INSERT INTO horarios(ultimoDigito, dia, inicioManana, finManana, inicioTarde, finTarde) 
VALUES ('$digito','$dia','$timeInicioD','$timefinD','$timeInicioT','$timefinT')";
$result = mysqli_query($conn, $query);
if(!$result){
   die("Consulta Fallida");
}

$_SESSION['message']='Guardado Correctamente';
$_SESSION['message_type']='success';

header("Location: configPicoYPlaca.php");
}
?>