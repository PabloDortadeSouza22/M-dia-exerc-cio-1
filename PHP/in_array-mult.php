<?php

$usuarios = [
    [   "id" => 1,
        "nome" => "Joao",
        "Email" => "Joao@example.com"],
    [   "id" => 2,
        "nome" => "Maaria",
        "Email" => "Maria@example.com"],
    [   "id" => 3,
        "nome" => "Pedro",
        "Email" => "Pedro@example.com"],

];

//Define variavel $busca com o valor que deseja procurar no array
$busca = "Pedro@example.com";

//Exibe a estrutura do array $usuario de forma legivel
echo '<pre>';
print_r($usuarios);
echo'</pre>';

$indice = array_search($busca, array_column($usuarios, 'email'));

if ($indice !== false){
    echo "$busca não foi encontrado com o ID: " . $usuarios[$indice]['id'];
}else{
    echo "$busca foi encontrada na lista de usuario";
}