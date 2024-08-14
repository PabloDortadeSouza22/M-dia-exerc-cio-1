<?php

for ($i = 1; $i <= 10; $i++) {

$categoria = "";
    switch (true) {
        case ($i >= 1 && $i <=3):
            $categoria = "baixo";
            break;
        case ($i >= 4 && $i <=7):
            $categoria = "Medio";
            break;
        case ($i >= 8 && $i <=10):
            $categoria = "Alto";
            break;
    }

    $par = ($i % 2 == 0) ?"par" : "impar";

    echo"O numero $i e classificado como $categoria e é $par.<br/>";
}