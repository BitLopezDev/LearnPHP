<?php
/*
CONSIGNA:
-Recorrer y mostrar array
-Ordenarlo y mostrarlo
-Mostrar Longitud
-Buscar algún elemento
*/

$numeros = [1,8,2,7,3,6,4,5];
//-Buscar algún elemento (el 3)
$busqueda = array_search(35, $numeros);
if($busqueda) {
    echo $busqueda;
} else {
    echo "El número no está en el array";
}
foreach ($numeros as $k => $v) {

   if($v == 3) {
    echo "El número 3 está en la posición $k.";
    break;
   }
}
// OR

//Mostrar Longitud
echo "El array \$numeros tiene ".count($numeros)." elementos";
//Ordenarlo y mostrarlo
sort($numeros);
foreach ($numeros as $k => $v) {
    echo "Número en posición $k: $v ";
}


//Recorrer y mostrar array
foreach ($numeros as $k => $v) {
    echo "Número en posición $k: $v ";
}