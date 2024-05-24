<?php
/*
CONSIGNA: Si var vacía rellenarla con texto en minúscula y mostrarlo en mayúscula
*/
$mivariable = '';

if(empty($mivariable)){
    $mivariable.="texto";
    echo strtoupper($mivariable);
} 