<?php 

// Utilizando a função “Range”(http://php.net/manual/en/function.range.php),
// criar um intervalo de letras (de a até n), imprimir uma frase que diga “Na
// posição [index], está o valor [value]”.
// Onde [value] será substituído por cada valor do array e [index] representa o
// índice.

$array = range(a,n);

foreach($array as $key => $value) {
    echo "Na posição $key, está o valor $value <br>";
}

?>