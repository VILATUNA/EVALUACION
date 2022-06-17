<!--CONEXION CON LA BASE DE DATOS-->
<?php
session_start();
$conn=mysqli_connect(
    'localhost',
    'root',
    '',
    'horariospicoyplaca'
);
?>