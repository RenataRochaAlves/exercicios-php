<?php 

if($_POST) {
    // strlen verifica o tamanho
    if(strlen($_POST['nomeCompleto']) == 0){
        echo "Campo nome não pode estar vazio";
    }
    if(strlen($_POST['user']) < 8) {
        echo "User precisa ter pelo menos 8 caracteres";
    }
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
        echo "E-mail inválido";
    }
    if(is_numeric($_POST['senha']) == false) {
        echo "A senha deverá conter apenas números";        
    }
}

?>

<form action="validacao.php" method="POST">
    <label for="nomeCompleto">Nome Completo</label><br>
        <input type="text" name="nomeCompleto" value=""><br>
    <label for="user">User</label><br>
        <input type="text" name="user" value=""><br>
    <label for="email">E-mail</label><br>
        <input type="email" name="email" value=""><br>
    <label for="senha">Senha</label><br>
        <input type="password" name="senha" value=""><br>

    <button type="submit">Enviar</button>


</form>