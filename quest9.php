<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Questão 9</title>
</head>
<body>
    <h3> Questão 9: Faça um algoritmo que receba um valor que foi depositado e exiba o valor com rendimento após um mês. <br>
        Considere fixo o juro da poupança em 0,70% a. m. </h3>

    <form method="post">
        <h2>Digite o valor depositado: </h2>
        <input type="number" step="any" name="deposito" placeholder="Digite o Valor Depositado: " required> </input>
        <br> <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $valor = $_POST["deposito"] ;
    $calculo = 0.007 * $valor ;
    $soma = $calculo + $valor ;
    echo "<h1>" . "rendimento após 1 mês:  " . $soma . "</h1>" ;
}


?>