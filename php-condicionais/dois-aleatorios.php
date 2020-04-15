<?php 

// Utilizando mt_rand(), gerar dois números aleatórios entre 1 e 100 na
// variável $x e a variável $y. Imprimir qual é o maior entre os dois ou se são
// iguais.


$x = mt_rand(1,100);
$y = mt_rand(1,100);

if ($x > $y) {
    echo "x é maior, x = $x e y = $y";
} elseif ($y > $x) {
    echo "y é maior, x = $x e y = $y";
} else {
    echo "são iguais!";
}

?>