<?php

$lista_frutas = ["Banana","Maçã","Morango","Uva"];

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo "<hr>";
echo '</pre>';

echo '</pre>';

$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo "<br>";

echo $lista_frutas[0];
?>