<!--BORRAR UN REGISTRO-->
<?php 

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM horarios WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("Error");
    }

$_SESSION['message']='Eliminado Correctamente';
$_SESSION['message_type'] = 'danger';

header("Location: configPicoYPlaca.php");
}
