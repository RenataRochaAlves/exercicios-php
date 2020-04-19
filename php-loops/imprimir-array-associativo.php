<?php 

// Definir uma variável $mascote que seja um array associativo
// a. No índice animal, deve dizer que animal é.
// b. No índice idade, deve dizer a idade.
// c. No índice altura, deve dizer a altura.
// d. No índice nome, deve dizer o nome
// e. Percorrer os valores do array com um foreach que imprima (por exemplo):
// animal: cachorro
// idade: 5
// altura: 0,60
// nome: Sonic

$mascote = [
    "animal" => "gato",
    "idade" => "4 anos",
    "altura" => "20cm",
    "nome" => "Indiana"
    ];

foreach($mascote as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

?>