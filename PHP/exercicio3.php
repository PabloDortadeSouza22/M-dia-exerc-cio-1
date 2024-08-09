<?php

//Variaveis
$valor_compra = 0;
$cliente_vip = 'sim';

//if para falar que se a compra dele for mais de 500 e se for vip ele ganha desconto
if ($valor_compra > 500 or $cliente_vip == 'sim'){
    echo "Cliente com desconto ativado";
}

//caso nao tivesse os requisitos ele não gannha desconto
else{
    echo "Cliente sem desconto";
}

?>