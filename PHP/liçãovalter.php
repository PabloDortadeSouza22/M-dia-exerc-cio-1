<?php

//criando array cadastro
$cadastro = [];

//criando uma array nome, dentro da array cadastro
$cadastro ['Nome'] = ['João', 'Pedro', 'Felipe', 'Guilherme'];

//criando uma array email, dentro da array cadastro
$cadastro ['Email'] = ['João@gmail.com', 'Pedro@gamil.com', 'Felipe@gmail.com', 'Guilherme@gmail.com'];

echo '<pre>';
print_r ($cadastro);
echo '<br>';
echo $cadastro ['Nome'] [2];
echo '<br>';
echo $cadastro ['Email'] [1];
echo '</pre>';

//2

$cadastro ['Nome'] [2] = ['Senai'];
$cadastro ['Email'] [1] = ['Senai'];

