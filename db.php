<!--CONEXION CON LA BASE DE DATOS POR DEFECTO-->
<?php
session_start();
$conn=mysqli_connect(
    'localhost', //SERVIDOR PUEDE SER TAMBIEN UNA IP
    'root', // USUARIO  POR DEFECTO
    '', //CONTRASEÑA POR DEFECTO ESTA EN BLANCO
    'horariospicoyplaca' //NOMBRE DE BASE DE DATOS
);
?>