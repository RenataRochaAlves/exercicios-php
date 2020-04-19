<?php 

// A partir de um arquivo com a seguinte variável definida:

// Criar um script que mostre o nome de cada país e suas cidades a partir da
// variável $ceu com o seguinte formato:
// As cidades da Argentina são:
// ● Buenos Aires
// ● Córdoba
// ● Santa Fé
// As cidades do Brasil são:
// ● Brasília
// ● Rio de Janeiro
// ● São Paulo


$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
"Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
"França" => ["Paris", "Nantes", "Lyon"],
"Itália" => ["Roma", "Milão", "Veneza"],
"Alemanha" => ["Munique", "Berlim", "Frankfurt"]
];


foreach($ceu as $key => $value) : ?>
    <p>As cidades do país <?= $key ?> são:</p>
    <ul>
        <?php for($i=0; $i < count($value); $i++) { ?>
        <li><?= $value[$i] ?></li>
        <?php } ?>
    </ul>
<?php endforeach; ?>