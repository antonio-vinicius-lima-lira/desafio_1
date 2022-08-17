<?php
$numero = 10;
$soma = 0;

//
function retornaBooleanDivisores($Numero) {
    if (gettype($Numero / 3) == "integer" || gettype($Numero / 5) == "integer") {
        return true;
    } else {
        return false;
    }
}


    if (!is_int($numero)) {
        print("ERRO: Informe um numero inteiro positivo!!");
		return;
    }

    if ($numero <= 0) {
        print("Informe um numero inteiro positivo!!");
		return;
    }

    for ($i = $numero - 1; $i > 0; $i--) {
        if (retornaBooleanDivisores($i)) {
            $soma += $i;
        }
    }
    print "O resultado da soma é : <b>$soma</b>";