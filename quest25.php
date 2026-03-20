<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 25</title>
</head>
<body>
    <h3>Questão 25: Faça um algoritmo que leia dois números e identifique se são iguais ou diferentes. 
        Caso eles sejam iguais imprima uma mensagem dizendo que eles são iguais. 
        Caso sejam diferentes, informe qual número é o maior, e uma mensagem que são diferentes. </h3>

    <form method="post">
        <h1>Digite o primeiro número: </h1>
        <input type="number" name="numero1" placeholder="Digite o 1 Número: " required>
        <br> <br>
        <h1>Digite o segundo número: </h1>
        <input type="number" name="numero2" placeholder="Digite o 2 Número: " required>
        <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>


<?php

if (isset($_POST["enviar"])) {
    $n1 = $_POST["numero1"] ;
    $n2 = $_POST["numero2"] ;

    if ($n1 == $n2) {
        echo "<h1>Os números: " . $n1 . " e " . $n2 . " são iguais </h1>"; 
    } elseif ($n1 != $n2) {
        if ($n1 > $n2) {
            echo "<h1> o número:  " . $n1 . " é maior que:  " . $n2 . " e estes números são diferentes </h1>"; 
        }  else {
            echo "<h1> o número:  " . $n2 . " é maior que:  " . $n1 . " e estes números são diferentes </h1>"; 
    }
} }

?>