<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <h3> Questão 2: Faça um algoritmo que receba dois números e ao final mostre a soma, subtração, multiplicação e a divisão dos números lidos.</h3>

    <form method="post">
        <input type="number" name="n1" placeholder="Digite o Primeiro Número:" required></input>
        <input type="number" name="n2" placeholder="Digite o Segundo Número:" required></input>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php
if (isset($_POST["enviar"])) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    $soma = $n1 + $n2 ;
    $subtracao = $n1 - $n2 ;
    $multiplicacao = $n1 * $n2 ;
    echo " Soma:  " . $soma  ; 
    echo " Subtração:  " . $subtracao  ;
    echo " Mulltiplicação:  " . $multiplicacao ;

    if ($n2 == 0) {
        echo " Não è Possivél dividir por zero!" ;
    }
    else {
        $divisao = $n1 / $n2 ;
        echo " Divisão:  " . $divisao;
    }
}
?>