<?php

// Selecionei as notas para usar no codigo

$nota1 = 10;
$nota2 = 5;
$nota3 = 10;
$soma = ($nota1 + $nota2 + $nota3) /3;

// usei o echo para puxar as notas para continuar o coodigo

echo "nota da primeira prova $nota1 <br>";
echo "nota da segunda prova $nota2 <br>";
echo "nota da terceira prova $nota3 <br>";

//aqui usei o echo media para puxar o $soma para somar e dividir

echo "media das notas das tres provas: $soma <br>";

//usei o if para falar que se ele tirar mais de 7 ele ser aprovado
//e o else para falar que se ele tirou menos de 7 ser reprovado na materia

if ($soma < 7){
    echo "O aluno foi reprovado";
}
else{
    echo "O aluno foi aprovado";
}

?>
