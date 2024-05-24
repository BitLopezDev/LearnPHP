<?php
require_once("index.php");
asort($peliculas); //ordena alfabéticamente
//sort ordena alfabéticamente o por números
$peliculas[] = "Titanic"; //añade Titanic al array;
/*
array_pop($peliculas); //quita el último elemento
unset($peliculas[1]);
$indice = array_rand($peliculas); //quita un elemento random del array
array_reverse($peliculas); //me lo da vuelta
array_search('Titanic', $peliculas); //retorna el índice O false
count($peliculas); //retorna cantidad de elementos
sizeof($peliculas); //retorna cantidad de elementos
*/