<?php

$usuarios = [
    [   "id" => 0,
        "nome" => "Joao",
        "Cidade" => "Cerquilho"],
        "UI estado" => "SP",
    [   "id" => 1,
        "nome" => "Maria",
        "Cidade" => "Tatui"],
        "UI estado" => "SP",
    [   "id" => 2,
        "nome" => "Pedro",
        "Cidade" => "Boituva"],
        "UI estado" => "SP",
    [   "id" => 3,
        "nome" => "Larissa",
        "Cidade" => "Cerquilho"],
        "UI estado" => "SP",
    [   "id" => 4,
        "nome" => "Guilherme",
        "Cidade" => " Nova Iguaçu"],
        "UI estado" => "RJ",
];

//Define variavel $busca com o valor que deseja procurar no array
$busca = "Guilherme";

echo '<pre>';
print_r($usuarios);
echo'</pre>';

$indice = array_search($busca, array_column($usuarios, 'nome'));

if ($indice !== false){
    echo "$busca foi encontrado com o ID: " . $usuarios[$indice]['id'];
}else{
    echo "$busca não foi encontrada na lista de usuario";
}

$busca = "Luizs";

//Exibe a estrutura do array $usuario de forma legivel
echo '<pre>';
print_r($usuarios);
echo'</pre>';

$indice = array_search($busca, array_column($usuarios, 'nome'));

if ($indice !== false){
    echo "$busca foi foi encontrado com o ID: " . $usuarios[$indice]['id'];
}else{
    echo "$busca não foi encontrada na lista de usuario";
}

        

