<?php 

// Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array
// para imprimir todos os números. A execução deve terminar se algum dos
// números encontrados for 5 (a mensagem impressa deve ser “Encontramos um
// 5!”).
// a. Resolver este problema com um for.
// b. Resolver este problema com um while.
// c. Resolver este problema com um do/while.

$array = [];

for($i=0; $i < 10; $i++) {
    $array[$i] = mt_rand(0,10);
}

for($i=0; $i < count($array); $i++) {
    if($array[$i] != 5){
        echo $array[$i] . "<br>";
    } else {
        echo "Encontramos um 5!";
        break;
    }
}

echo "<hr>";

$contador = 0;

while($contador < count($array)) {
    if($array[$contador] != 5) {
        echo $array[$contador] . "<br>";
        $contador++;
    } else {
        echo "Encontramos um 5!";
        break;
    }
}

echo "<hr>";

$contador2 = 0;

do {
    if($array[$contador2] != 5) {
        echo $array[$contador2] . "<br>";
        $contador2++;
    } else {
        echo "Encontramos um 5!";
        break;
    }
} while($contador2 < count($array));


?>