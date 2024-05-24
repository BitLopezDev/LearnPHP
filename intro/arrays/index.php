<?php


$peliculas = ['Batman', 'spiderman', 'thor', 'ironman'];

$personas = array(
    'nombre' => 'Helena',
    'apellido' => 'Lady'

);

/*MULTIDIMENSIONALES*/

$contactos = [
    array(
        'nombre' => 'Helena',
        'apellido' => 'Lady'
    
    ),
    array(
        'nombre' => 'Rominina',
        'apellido' => 'Bruja'
    
    ),
    array(
        'nombre' => 'Vienna',
        'apellido' => 'Reina blanca'
    
    )
];

echo $contactos[0]['nombre'];

