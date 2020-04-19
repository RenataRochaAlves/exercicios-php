<?php 

// A partir de um arquivo com a seguinte variável definida:

// Criar um script que mostre o nome da capital e o país a partir da variável $ceu



$ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
"Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
"Alemanha" => "Berlim", "Grécia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
"Portugal"=>"Lisboa", "Espanha"=>"Madri",
"Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta",
"Áustria" => "Viena", "Polônia"=>"Varsóvia"];


foreach($ceu as $key => $value) {
    echo "País: $key / Capital: $value <br>";
}

?>