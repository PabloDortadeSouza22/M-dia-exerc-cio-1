<?php

$cadastro = [];

$cadastro ['usuario'] = ['João','Maria','Pedro'];

$cadastro ['senha'] = ['1234','abcd','5678'];

echo "<hr>";

echo '<pre>';
print_r ($cadastro);
echo "<hr>";
echo'</pre>';

$cadastro['usuario'][1] = 'Ana';

$cadastro['senha'][1] = 'efgh';

echo "O terceiro valor de usuario agora é :";
echo $cadastro['usuario'][1];

echo "<hr>";

echo "O terceiro valor de senhas agora é :";
echo $cadastro['senha'][1];

echo"<hr>";

echo '<pre>';
print_r ($cadastro);
echo "<hr>";
echo'</pre>';


// echo '<pre>';
// print_r ($Cadastro);
// echo $Cadastro[0];
// echo "<hr>";
// echo '</pre>';