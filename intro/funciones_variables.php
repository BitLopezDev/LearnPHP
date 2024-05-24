<?php

//FUNCIONES VARIABLES

function buenosdias(){
    return 'día';
}
function buenastardes() {
    return 'as tardes';
}

function buenasnoches(){
    return 'as noches';
}

$horario = "buenasnoches";
echo "buen".$horario(); //ejecuta la función buenasnoches();, retorna 'buenas noches';
