<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 32</title>
</head>
<body>
    <h3>Questão 32: Dados três valores A, B e C, em que A e B são números reais e C é um caractere, pede-se para imprimir o resultado
    da operação de A por B se C for um símbolo de operador aritmético; caso contrário deve ser impressa uma mensagem
    de operador não definido. Tratar erro de divisão por zero. </h3>

    <form method="post">
        <h1>Digite O Valor A: </h1>
        <input type="number" step="any" name="A" placeholder="Digite O Valor A: ">
        <h1>Digite O Valor B: </h1>
        <input type="number" step="any" name="B" placeholder="Digite O Valor B: ">
        <h1>Digite O Valor C: </h1>
        <input type="text"  name="C" placeholder="Digite O Valor C: ">
        <button type="submit" name="enviar">ENVIAR</button>
    </form>
</body>
</html>


<?php

if (isset($_POST["enviar"])) {
    
    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];

    switch ($c) {
        case '+':
            echo "<h1> A + B = " . $a + $b . "</h1>";  
            break;
        case "-":
            echo "<h1> A - B = " . $a - $b . "</h1>";  
            break;
        case "*":
            echo "<h1> A * B = " . $a * $b . "</h1>";  
            break;
        case "/":
            if ($b == 0) {
                echo "<h1>Não é Possivél dividir por zero</h1>";  
            } else {
                echo "<h1> A / B = " . $a / $b . "</h1>";    
            }
            break;
        default:
                echo "<h1>Operador Invalido!</h1>";    
            break;
    }


}

?>



