<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 26</title>
</head>
<body>
    <h3>Questão 26: Faça um algoritmo que leia um número de 1 a 5 e escreva por extenso. 
        Caso o usuário digite um número que não esteja neste intervalo, exibir mensagem: número inválido. </h3>

    <form method="post">
        <h1>Digite um número inteiro de 1 até 5 </h1>
        <input type="number" name="n" placeholder="digite o número" required>
        <button type="submit" name="enviar" > ENVIAR </button>
    </form>
</body>
</html>


<?php

if (isset($_POST["enviar"])) {
    $n = $_POST["n"] ;

    switch ($n) {
        case $n == 1:
            echo "<h1>o número: 1 por extenso,fica: um </h1>";
            break;
        case $n == 2:
            echo "<h1>o número: 2 por extenso,fica: dois </h1>";
            break;
        case $n == 3:
            echo "<h1>o número: 3 por extenso,fica: Três </h1>";
            break;
        case $n == 4:
            echo "<h1>o número: 4 por extenso,fica: quatro </h1>";
            break;
        case $n == 5:
            echo "<h1>o número: 5 por extenso,fica: cinco </h1>";
            break;
        default:
            echo "<h1>Número Inválido!</h1>";
            break;
    }
}


?>