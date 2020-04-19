<?php 

// Modificar o exercício anterior para que, em vez de parar no número 100, pare
// em um número gerado aleatoriamente entre 0 e 100.

for($i=1; $i<= mt_rand(0,100); $i++) {
    echo $i . "<br>";
}

?>