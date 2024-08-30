<?php

//Criando array lista_coisa
$lista_coisas = [];

//Criando um array frutas, dentro do array lista_coisas
$lista_coisas ['frutas'] = ['Banana','Maçã','Morango','Uva'];

//Criando um array pessoas, dentro do array lista_coisas
$lista_coisas['pessoas'] = ['João','José','Maria'];

//alterando o terceiro valor array frutas
$lista_coisas['furtas'][2] = 'Abacaxi';

//alterando o terceiro valor array pessoas
$lista_coisas['pessoas'][1] = 'Carlos';

echo "O terceiro valor de frutas agora é :";
echo $lista_coisas['frutas'][2];

echo "<hr>";

echo "O terceiro valor de pessoas agora é :";
echo $lista_coisas['pessoas'][1];
// echo'<pre>';
// print_r($lista_coisas);
// echo '</pre>';

?>