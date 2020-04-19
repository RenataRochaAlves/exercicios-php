<?php 

// 3. Criar arquivo chamado incluir.php imprima na tela a seguinte string “Sou o
// arquivo incluir”.
// a. Incluir neste documento 0 arquivo boletos.php. O que acontece?
// b. Substituir include por require. O que acontece? (testar mensagens
// de erros).
// c. Agora sim, criar na mesma pasta um arquivo chamado boletos.php
// que faça somente echo “Olá, Mundo”. O que acontece agora com
// no arquivo incluir.php?
// d. No arquivo incluir.php, substituir o require por include, e incluir 3
// vezes o mesmo arquivo. O que acontece?
// e. O arquivo incluir.php, substituir todos os include por include_once.
// O que acontece?

include_once("boletos.php");
include_once("boletos.php");
include_once("boletos.php");

echo "Sou o arquivo incluir";

?>