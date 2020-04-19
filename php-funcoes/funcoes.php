<?php 

$numeroMagico = 8;

// 1. Criar um arquivo chamado funcoes.php:
// a. Definir uma função maior() que receba 3 números e retorne o maior
// deles.
// b. Definir uma função tabela() que receba um parâmetro base
// (número inicial), um parâmetro limite (número máximo), e retorne
// um array com a sequência de números a partir do número base até
// o número limite.
// c. Definir uma variável chamada numeroMagico, que contenha um
// número. Ela deverá estar na primeira linha do nosso código PHP.
// d. Modificar maior() de forma que, se receber apenas 2 parâmetros, a
// função compare esses dois números com o número da variável
// numeroMagico.
// e. Modificar função tabela() de forma que, se a receber apenas um
// parâmetro, a função use numeroMagico como limite.

function maior($x,$y,$z = 8) {
    global $funcoesExecutadas;

    $funcoesExecutadas++; 

    if($x > $y && $x > $z) {
        return $x;
    } elseif($y > $x && $y > $z) {
        return $y;
    } else {
        return $z;
    }
}

$teste = maior(2,4);

echo $teste;

function tabela($inicial, $limite = 8) {
    global $funcoesExecutadas;

    $funcoesExecutadas++;
    
    $sequencia = range($inicial,$limite);

    return $sequencia;
}

// $teste = tabela(2,20);

// var_dump($teste);

?>