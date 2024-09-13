<?php

$nome = array("Pedro","Pablo","Paulo","jair","souza","vini","carlos","ana","nathan");
$nome2 = "jair";
$indice = array_search("jair", $nome);

if($indice !== false){
    echo"$nome2 foi encontrada na posição: " . $indice;
}else{
    echo"$nome2 não foi encointrada na lista de nome.";
}