<?php 

// Utilizando while, faça um programa que lance uma moeda (que receberá um
// número aleatório que pode ser 0 ou 1) até tirar 5 vezes cara (representado
// pelo número 1).
// O quando loop terminar, você precisará imprimir o número de lançamentos
// que teve que acontecer até tirar 5 vezes cara.

$contador = 0;
$moeda = 0;
$lancamentos = 0;

while($contador < 5) {
    $moeda = mt_rand(0,1);

    if($moeda == 1){
        $contador++;
    }

    $lancamentos++;

    echo $moeda."<br>";
}

echo "número de lançamentos: $lancamentos";

?>