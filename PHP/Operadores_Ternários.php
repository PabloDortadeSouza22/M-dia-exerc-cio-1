<?php

//Exemplo com variavel numerico
/*$idade = 20;
$resultado = ($idade >=18) ? "Maior de idade" : "Menor de idade";
echo $resultado; // Saida: Maior de idade
*/

/*$nome = "Ana";
$mensagem = ($nome == "Ana") ? "Ola, Ana" : "Ola, visitante";
echo $mensagem; // Saida: Ola, Ana
*/

$is_logged_in = true;

$mensagem = $is_logged_in ? "Bem vindo de volta" : "Por favor, faca login.";
echo $mensagem;

?>