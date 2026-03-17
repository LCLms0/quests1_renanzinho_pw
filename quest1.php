<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <h3>Questão 1 : Faça um algoritmo que receba dois números e exiba o resultado da sua soma.</h3>

    <form method="post">
        <input type="number" name="n1" placeholder="Digite o Primeiro Número:" required></input>
        <br>
        <span> + </span>
        <br>
        <input type="number" name="n2" placeholder="Digite o Segundo Número:" required></input>
        <br> <br>
        <button type="submit" name="somar" > Somar </button>

    </form>
</body>
</html>

<?php
if (isset($_POST["somar"])) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    $soma = $n1 + $n2 ;
    echo "Resultado:  " . $soma  ;
}



?>