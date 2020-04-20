<?php 

var_dump($_GET);

?>

<!-- <form class=" " action="home.php" method="GET">

    <input type="text" name="nome" value="">
    <input type="text" name="sobrenome" value="">
    <input type="number" name="idade" value="">

    <button type="submit" name="button">Enviar</button>


</form> -->

<form class=" " action="home.php" method="POST">

    <input type="text" name="nome" value="">
    <input type="text" name="sobrenome" value="">
    <input type="number" name="idade" value="">

    <button type="submit">Enviar</button>


</form>

<?php 

echo "Ola " . $_POST['nome'] . " " . $_POST['sobrenome'];

?>