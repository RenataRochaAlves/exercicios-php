<?php 

// 5. Testar a função de php getAllHeaders() e imprimir o resultado. O que
// encontramos? Imprimir todos os valores usando foreach.

foreach(getallheaders() as $key => $value) {
    echo "$key : $value <br>";
}


?>