<?php

function comprimente() {
    echo "Olá Gerson";
}


function ePar($numero) {
    return $numero % 2 == 0;
}


// $teste = ePar(6);

// if($teste){
//     echo "o numero eh par";
// } else {
//     echo "o numero eh impar";
// }


function somaNumeros($numeros){
    $var = 0;
    for($i=0; $i < count($numeros); $i++) {
        $var = $var + $numeros[$i];
    }
    return $var;
}

// $testearray = somaNumeros([5,5,5]);

// echo $testearray;

function buscaPessoa($string){
    $resultado = [];

    global $pessoas;

    foreach($pessoas as $pessoa) {
        if(stripos($pessoa["nome"],$string) == true) {
            $resultado[] = $pessoa;
        }
    }

    return $resultado;
}

?>



