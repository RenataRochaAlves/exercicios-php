<?php 

// Definir um array com 5 strings que sejam nomes. Percorrer esse array para
// imprimir todos os nomes na tela.
// a. Resolver este problema com um for.
// b. Resolver este problema com um foreach.
// c. Resolver este problema com while.
// d. Resolver este problema com um do/while.


$nomes = ["Amanda", "Paula", "Fernanda", "Yasmin", "Juliana"];

for($i=0; $i < count($nomes); $i++) {
    echo $nomes[$i] . "<br>";
}

echo "<hr>";

foreach($nomes as $nome) {
    echo $nome . "<br>";
}

echo "<hr>";

$contador = 0;

while($contador < count($nomes)) {
    echo $nomes[$contador] . "<br>";
    $contador++;
}

echo "<hr>";

$contador2 = 0;

do {
    echo $nomes[$contador2] . "<br>";
    $contador2++;
} while($contador2 < count($nomes));

?>