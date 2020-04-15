<?php 

// Utilizando mt_rand(), gerar um número aleatório entre 1 e 5 na variável $i.
// Utilizando SWITCH, imprimir “i é igual a X”.
// No lugar de X precisa colocar o valor da variável $i.

$i = mt_rand(1,5);

switch ($i) {
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
    case 3:
        echo "i é igual a 3";
        break;
    case 4:
        echo "i é igual a 4";
        break;
    case 5:
        echo "i é igual a 5";
        break;
}


?>