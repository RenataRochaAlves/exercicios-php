<?php 

if($_GET) {
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];
    $profissao = $_GET['profissao'];
} else {
    $nome = " ";
    $sobrenome = " ";
    $idade = " ";
    $profissao = " ";
}

$a_prof = ["Professor", "Analista", "Desenvolvedor"];


?>

<form action="persistencia.php" method="GET">

<input type="text" name="nome" value="<?= $nome ?>">
<input type="text" name="sobrenome" value="<?= $sobrenome ?>">
<input type="number" name="idade" value="<?= $idade ?>">

<select name="profissao" id="profissao">
    <option default value="escolha uma profissao">Escolha uma profissão</option>

    <?php foreach($a_prof as $value): 
        if($profissao == $value) {?>
            <option selected value="<?= $value ?>"><?= $value ?></option>
        <?php } else { ?>
            <option value="<?= $value ?>"><?= $value ?></option>
        <?php } endforeach ?>

</select>

<button type="submit">Enviar</button>

</form>