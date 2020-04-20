<?php 

// Assim como imprimimos $_POST e $_GET, existem outras variáveis
// globais vamos imprimir. Testar cada variável em um pedido vazio ou
// vindo de um formulário (utilizando o var_dump() ):
// a. $_SERVER
// b. $_FILES
// c. $_REQUEST
// d. $_SESSION
// e. $_ENV
// f. $_COOKIE
// g. $GLOBALS

var_dump($_SERVER);
echo "<hr>";

var_dump($_FILES);
echo "<hr>";

var_dump($_REQUEST);
echo "<hr>";

var_dump($_SESSION);
echo "<hr>";

var_dump($_ENV);
echo "<hr>";

var_dump($_COOKIE);
echo "<hr>";

var_dump($_GLOBALS);
echo "<hr>";


?>