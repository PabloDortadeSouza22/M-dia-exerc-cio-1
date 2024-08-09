<?php

$salario = 2340;
$horas = 23;

if ($salario < 2000 and $horas > 10){
    $total = $salario * 1.2;
    echo "Você ganhou um bonux de 20%: $total";
}

elseif ($salario >= 2000 and $horas > 5){
   $total2 = $salario * 0.1;
    echo "Você ganhou um bonus de 10%: $total2";
}

else {
    echo "Não recebe bonus";
}


?>