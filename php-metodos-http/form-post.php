<?php 

// 4. Adicionar ao formulário os seguintes inputs:
//     a. Adicionar uma checkbox com opções, que responda à pergunta
//     “Como você ficou sabendo deste site?”.
//     b. Adicionar um radio button para selecionar o gênero .
//     c. Adicionar um select de 1 a 10 que responda à pergunta “Dormiu
//     bem ontem? Dê uma nota:”.
//     d. Adicionar uma checkbox para aceitar “Termos e Condições”.
//     e. Completar o formulário, selecionando várias opções das
//     checkboxes, e enviá-lo através do método POST. O resultado
//     mudou como você esperava?

foreach($_POST as $value) {
    echo $value . "<br>";
}

?>


<form action="form-post.php" method="POST">
    Nome: <input type="text" name="nome" value=""><br>

    E-mail: <input type="email" name="email" value=""><br>

    Como você ficou sabendo deste site? <br>
    <input type="checkbox" name="google" value="">
        <label for="google">Google</label><br>
    <input type="checkbox" name="facebook" value="">
        <label for="facebook">Facebook</label><br>
    <input type="checkbox" name="instagram" value="">
        <label for="instagram">Instagram</label><br>
    <input type="checkbox" name="twitter" value="">
        <label for="twitter">Twitter</label><br>

    Selecione o gênero: <br>
    <input type="radio" name="genero" value="masculino">
        <label for="masculino">Masculino</label><br>
    <input type="radio" name="genero" value="feminino">
        <label for="feminino">Feminino</label><br>
    <input type="radio" name="genero" value="outros">
        <label for="outros">Outros</label><br>

    Dormiu bem ontem? <br>
    <select name="dormiu" id="dormiu">
        <option default value="nota">Dê uma nota</option>
        <?php for($i=1; $i <= 10; $i++) { ?>
            <option value="<?= $i ?>" name="<?= $i ?>"><?= $i ?></option>
        <?php } ?>    
    </select> <br>

    <input type="checkbox" name="termos" value="">
        <label for="termos">Aceito os termos e condições</label><br>

    <button type="submit">Enviar</button>

</form>