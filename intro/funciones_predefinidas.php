<?php

//var_dump();
echo date("d-m-Y");
echo '<br/>';
echo time(); //timestamp
echo "<br />";
//gettype();
//if(is_float())
var_dump(trim("   espacios    "));
echo "<br />";
$year = 2020;
 //destruye la variable;

if(empty($year)){
//retorna true si está vacía, sin definir,, igual a cero o en casos falsey

//EJEMPLOS:
/*
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

*/
} else {
    unset($year);
}

echo "longitud ". strlen("cadena"); //longitud de cadena
echo "<br />";

$frase ="esta es mi frase";
echo "posición: ". strpos($frase, "frase");
echo "<br />";


/*
str_replace("vida", "moto", "la vida") => 'la moto'

*/