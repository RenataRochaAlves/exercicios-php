<?php

/* Utilizando a variável do exercício anterior, imprima “O número NÃO é 3” caso
essa frase seja verdadeira.
Caso o número seja 3, imprimir simplesmente o número 3. */

$var1 = mt_rand(1,5);

if($var1 != 3) {
    echo "O número NÃO é 3";
} else {
    echo $var1;
}

?>