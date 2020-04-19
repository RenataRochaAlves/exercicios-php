<?php 

// Criar uma arquivo chamado tudoJunto.php. O conteúdo da primeira linha
// deve ser $funcoesExecutadas = 0. Abaixo disso, deve ser incluído nele o
// arquivo funcoes.php.
// Em seguida, modifique cada função de funcoes.php para que, no início de
// cada uma haja o código: $funcoesExecutadas++.
// Teste executar cada função e observe o quanto a variável funções e ver
// quanto vale $funcoesExecutadas. Isso funciona bem? O que acontece?

// . Caso após o exercício anterior tenha aparecido algum erro na tela,
// modificar a variável em cada função com a palavra reservada global para
// que funcione.


$funcoesExecutadas = 0;

include("funcoes.php");

$teste = maior(4,5,6);

echo $teste . "<br>" . $funcoesExecutadas;

?>