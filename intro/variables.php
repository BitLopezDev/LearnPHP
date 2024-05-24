<?php
$frase ="Esta es mi frase";

function imprimir(){
    global $frase;
    //Preciso el global porque if not no puede acceder
    echo $frase;
    $year ="2020";

}
//para acceder a $year preciso retornar $year desde la función imprimir();

?>