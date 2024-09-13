<?php

$nome_fruta = 'abacate';

// Cria um array chamado $frutas contendo tres elementos: "Maça","banana" e "Laranja"
$frutas = ["Maça","banana","laranja"];

// Verificar se banana está presente no array $frutas
if (in_array("abacate",$frutas)){
    echo "$nome_fruta está na lista.";
}else{
    echo "$nome_fruta não está na lista.";
}

?>