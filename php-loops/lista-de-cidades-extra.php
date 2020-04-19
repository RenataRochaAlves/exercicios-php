<?php 

// 13. A partir do exercício anterior:
// ● Adicionar a cada país um dado extra, além das cidades, chamado
// naAmerica. Esse dado deve receber o valor true ou false (caso exista na
// américa ou não).
// ● Imprimir assim como no exercício 12 porém apenas deverão aparecer na
// tela os países que estejam na américa.
// IMPORTANTE: Para que isso funcione bem, os alunos devem criar um array
// associativo para cada país, de forma que cada país tenha os dados de suas
// cidades e naAmerica (se estão ou não).


$ceu = [
    "Argentina" => [
        "cidades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "naAmerica" => true ],

    "Brasil" => [
        "cidades" => ["Brasília", "Rio de Janeiro", "São Paulo"],
        "naAmerica" => true ],

    "Colômbia" => [
        "cidades" => ["Cartagena", "Bogotá", "Barranquilla"],
        "naAmerica" => true ],

    "França" => [
        "cidades" => ["Paris", "Nantes", "Lyon"],
        "naAmerica" => false ],

    "Itália" => [
        "cidades" => ["Roma", "Milão", "Veneza"],
        "naAmerica" => false ],

    "Alemanha" => [
        "cidades" => ["Munique", "Berlim", "Frankfurt"],
        "naAmerica" => false ]
    ];
    
    
    foreach($ceu as $key => $value){
        if($value["naAmerica"]) {?>
        <p>As cidades do país <?= $key ?> são:</p>
        <ul>
            <?php for($i=0; $i < count($value["cidades"]); $i++) { ?>
            <li><?= $value["cidades"][$i] ?></li>
            <?php } ?>
        </ul>
            <?php } 
        } ?>