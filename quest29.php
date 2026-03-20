<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 29</title>
</head>
<body>
    <h3>Questão 29: Faça um algoritmo utilizando switch/case, que receba o número do mês e mostre o mês correspondente. Valide mês inválido. </h3>

    <form method="post">
        <h1>Digite um número de 1 a 12 </h1>
        <br> <br>
        <input type="number" name="n" placeholder="Digite o Mês: " requeried>
        <br> <br>
        <button type="submit" name="enviar"> Enviar </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $ano = $_POST["n"] ;

    switch ($ano) {
        case 1:
            echo "<h1>1 - JANEIRO </h1>";
            break;
        case 2:
            echo "<h1>2 - FEVEREIRO </h1>";
            break;
        case 3:
            echo "<h1>3 - MARÇO </h1>";
            break;
        case 4:
            echo "<h1>4 - ABRIL </h1>";
            break;
        case 5:
            echo "<h1>5 - MAIO </h1>";
            break;
        case 6:
            echo "<h1>6 - JUNHO </h1>";
            break;
        case 7:
            echo "<h1>7 - JULHO </h1>";
            break;
        case 8:
            echo "<h1>8 - AGOSTO </h1>";
            break;
        case 9:
            echo "<h1>9 - SETEMBRO </h1>";
            break;
        case 10:
            echo "<h1>10 - OUTUBRO </h1>";
            break;
        case 11:
            echo "<h1>11 - NOVEMBRO </h1>";
            break;
        case 12:
            echo "<h1>12 - DEZEMBRO </h1>";
            break;
        default:
            echo "<h1>Digite um Número de 1 a 12, vc entendeu? seu betinha";
            break;
    }
}

?>