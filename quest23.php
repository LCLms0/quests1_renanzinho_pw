<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 23</title>
</head>
<body>
    <h3> Questão 23:  Faça um algoritmo que receba um número e mostre uma mensagem caso este número sege maior que 80, menor
        que 25 ou igual a 40. </h3>


    <form method="post">
        <h1>Digite o número: </h1>
        <input type="number" step="any" name="numero" placeholder="Digite o número: " required>
        <br> <br>
        <button type="submit" name="enviar" > ENVIAR </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $n = $_POST["numero"] ;

    if ($n > 80  || $n < 25 || $n == 40) {
        echo "<h1> exibindo mensagem </h1>" ;
    }
}

?>