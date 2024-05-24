<?php
include_once("index.php");
/*
for($i =0; $i<count($peliculas); $i++ ) {
    echo $peliculas[$i];
    echo '<br />';
}*/
foreach($peliculas as $peli){
    echo $peli;
    echo '<br />';
}
foreach($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
    /*
    This loop iterates over the $contactos array and 
    assigns two variables for each element:

$key: This variable holds the key (index) 
of the current element in the array. In this case, the keys are 0, 1, and 2.
$contacto: This variable holds the value of 
the current element in the array. In this case, 
the values are the three sub-arrays containing 
information about each contact.*/
}

