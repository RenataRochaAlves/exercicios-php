<?php 

// Gerar um número aleatório entre 0 e 100 (lembra qual função podemos
// utilizar?). Se ele for maior que 50 e par, imprimir “O número cumpre a
// condição”. Caso contrário, imprimir “O número NÃO cumpre a condição”

$numero = mt_rand(0,100);

if ($numero > 50 && $numero % 2 == 0) {
    echo "O número cumpre a condição <br>";
} else {
    echo "O número NÃO cumpre a condição <br>";
}

echo $numero;

?>