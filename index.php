<?php

//Entradas
$horasTrabajadas=100;
$nombreEmpleado="Andres";
$identificacionTrabajador="898488";

//PROCESO
if($horasTrabajadas<=40){
    $valorHora=20000;
    $totalDevengado=$valorHora*$horasTrabajadas;
    echo("Señor: ".$nombreEmpleado." su salario fue de: $".$totalDevengado);
}else{
    $valorHoraNormal=20000;
    $valorHoraExtra=25000;
    
    $totalHorasNormales=$valorHoraNormal*40;
    $totalHorasExtra=$valorHoraExtra*($horasTrabajadas-40);

    $totalDevengado=$totalHorasExtra + $totalHorasNormales;
    echo("Señor: ".$nombreEmpleado." su salario fue de: $".$totalDevengado);
}



?>