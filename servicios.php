<?php

function diasTransitables($numPlaca)
{
    $resultado = null;
    if ($numPlaca == 1 || $numPlaca == 2) {
        $resultado =  "
        <tr><td>MARTES</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>MIERCOLES</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>JUEVES</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>VIERNES</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>SABADO</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>DOMINGO</td><td>" . horarioCircula() . "</td></tr>";
    } else if ($numPlaca == 3 || $numPlaca == 4) {
        $resultado = "
        <tr><td>LUNES</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>MIERCOLES</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>JUEVES</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>VIERNES</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>SABADO</td><td>" . horarioCircula() . "</td></tr>
        <tr><td>DOMINGO</td><td>" . horarioCircula() . "</td></tr>";
    } else if ($numPlaca == 5 || $numPlaca == 6) {
        $resultado =  "
            <tr><td>LUNES</td><td>" . horarioCircula() . "</td></tr>
            <tr><td>MARTES</td><td>" . horarioCircula() . "</td></tr>
            <tr><td>JUEVES</td><td>" . horarioCircula() . "</td></tr>
            <tr><td>VIERNES</td><td>" . horarioCircula() . "</td></tr>
            <tr><td>SABADO</td><td>" . horarioCircula() . "</td></tr>
            <tr><td>DOMINGO</td><td>" . horarioCircula() . "</td></tr>";
    } else if ($numPlaca == 7 || $numPlaca == 8) {
        $resultado =  "
                <tr><td>LUNES</td><td>" . horarioCircula() . "</td></tr>
                <tr><td>MARTES</td><td>" . horarioCircula() . "</td></tr>
                <tr><td>MIERCOLES</td><td>" . horarioCircula() . "</td></tr>
                <tr><td>VIERNES</td><td>" . horarioCircula() . "</td></tr>
                <tr><td>SABADO</td><td>" . horarioCircula() . "</td></tr>
                <tr><td>DOMINGO</td><td>" . horarioCircula() . "</td></tr>";
    } else if ($numPlaca == 9 || $numPlaca == 0) {
        $resultado =  "
                    <tr><td>LUNES</td><td>" . horarioCircula() . "</td></tr>
                    <tr><td>MARTES</td><td>" . horarioCircula() . "</td></tr>
                    <tr><td>MIERCOLES</td><td>" . horarioCircula() . "</td></tr>
                    <tr><td>JUEVES</td><td>" . horarioCircula() . "</td></tr>
                    <tr><td>SABADO</td><td>" . horarioCircula() . "</td></tr><tr>
                    <td>DOMINGO</td><td>" . horarioCircula() . "</td></tr>";
    } else {
        $resultado = "";
    }
    return $resultado;
}

function diasNoTransitables($numPlaca)
{
    $resultado = null;
    if ($numPlaca == 1 || $numPlaca == 2) {
        $resultado = "NO CIRCULA LUNES";
    } else if ($numPlaca == 3 || $numPlaca == 4) {
        $resultado = "NO CIRCULA MARTES";
    } else if ($numPlaca == 5 || $numPlaca == 6) {
        $resultado = "NO CIRCULA MIERCOLES";
    } else if ($numPlaca == 7 || $numPlaca == 8) {
        $resultado = "NO CIRCULA JUEVES";
    } else if ($numPlaca == 9 || $numPlaca == 0) {
        $resultado = "NO CIRCULA VIERNES";
    } else {
        $resultado = "";
    }
    return $resultado;
}

function horarioNoCircula($numPlaca)
{
    if ($numPlaca == 1 || $numPlaca == 2 || $numPlaca == 3 || $numPlaca == 4 || $numPlaca == 5 || $numPlaca == 6 || $numPlaca == 7 || $numPlaca == 8 || $numPlaca == 9 || $numPlaca == 0) {
        $resultado = "05:00-10:00 a.m. y 16:00-21:00 p.m.";
    } else {
        $resultado = "";
    }

    return $resultado;
}

function horarioCircula()
{
    $resultado = "Libre Circulacion";

    return $resultado;
}

function editarHorario()
{
    $horarios = [
        [
            'id' => 1,
            'Dia' => 'Lunes',
            'Horario' => '05:00-10:00 a.m. y 16:00-21:00 p.m.'
        ],
        [
            'id' => 2,
            'Dia' => 'Martes',
            'Horario' => '05:00-10:00 a.m. y 16:00-21:00 p.m.'
        ],
        [
            'id' => 3,
            'Dia' => 'Miercoles',
            'Horario' => '05:00-10:00 a.m. y 16:00-21:00 p.m.'
        ],
        [
            'id' => 4,
            'Dia' => 'Jueves',
            'Horario' => '05:00-10:00 a.m. y 16:00-21:00 p.m.'
        ],
        [
            'id' => 5,
            'Dia' => 'Viernes',
            'Horario' => '05:00-10:00 a.m. y 16:00-21:00 p.m.'
        ]
    ];
 return $horarios;
}

function eliminar($ids){
    $datos=editarHorario();

    foreach ($datos as $key => $row) {
        $id[$key] = $row['id'];
        if($ids==$id[$key]){
            unset($datos[$id[$key]]);
        }
    }

}
