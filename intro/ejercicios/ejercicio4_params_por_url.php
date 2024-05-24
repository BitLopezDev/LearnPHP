<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 =  $_GET['numero1'] ?? 0;
    $numero2 = $_GET['numero2'] ?? 0;
    echo 'La suma es: ';

    echo $numero1 + $numero2;
} else {
    echo 'Escribe los números';
}
