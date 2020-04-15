<?php 

// Aqui criaremos 3 variáveis: idade (onde o dado recebido será um número),
// casado (onde o dado será um booleano) e sexo (dado será uma string que
// pode ser “Masculino”, “Feminino” ou “Outro”).
// Agora sua condição será: se a pessoa tiver mais de 18 anos e não for casada,
// será impressa a mensagem “Boas-vindas”.
// a. Desafio 2: Modificar o exercício para também imprimir “Boas-vindas” se o
// sexo for “Outro


$idade = 20;
$sexo = "outro";
$casado = true;

if ($idade >= 18 && $casado == false || $sexo == "outro") {
    echo "Boas vindas";
}


?>