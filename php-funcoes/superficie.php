<?php 

// Criar um arquivo chamado superficie.php:
// a. Definir uma função triangulo() que retorne sua superfície.
// b. Definir uma função retangulo() que retorne sua superfície.
// c. Definir uma função quadrado() que retorne sua superfície.

function triangulo($base,$altura) {
    $resultado = ($base * $altura) / 2;
    return $resultado;
}

function retangulo($base, $altura) {
    $resultado = $base * $altura;
    return $resultado;
}

function quadrado($lado) {
    $resultado = $lado * $lado;
    return $resultado;
}

$teste = quadrado(2);

echo $teste;


?>