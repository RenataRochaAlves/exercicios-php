<?php 

// Utilizando o mesmo switch, deixar apenas os casos do número 1 e 2. Se o
// número for outro, imprimir “NÃO é igual a 1 ou 2”


$i = mt_rand(1,5);

switch ($i) {
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
    case 3:
        echo "NÃO é igual a 1 ou 2";
        break;
    case 4:
        echo "NÃO é igual a 1 ou 2";
        break;
    case 5:
        echo "NÃO é igual a 1 ou 2";
        break;
}

?>