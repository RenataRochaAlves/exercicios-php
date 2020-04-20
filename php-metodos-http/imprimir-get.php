<?php 

// Com base no seguinte código:
// <!DOCTYPE HTML>
// <html>
// <body>
// <form action="imprimir.php" method="get">
// Nome: <input type="text" name="nome"><br>
// E-mail: <input type="text" name="email"><br>
// <input type="submit">
// </form>
// </body>
// </html>
// a. O que acontece agora em imprimir.php?
// b. Modificar imprimir.php para que imprima algum valor específico
// de $_GET.
// c. Modificar imprimir.php para que imprima todos os valores
// utilizando um foreach.


// 3. Modificar o HTML para que ele envie os dados através de POST. Como
// deveríamos modificar imprimir.php para que continue funcionando?

foreach($_POST as $value){
    echo $value . "<br>";
}

?>

<!DOCTYPE HTML>
<html>
<body>
    <form action="imprimir-get.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html>