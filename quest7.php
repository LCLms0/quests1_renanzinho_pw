<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7</title>
</head>
<body>
    <h3> Questão 7: Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. <br>
        A fórmula de conversão é: F = C x 1,8 + 32, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius. </h3>
    <br> <br>
    <h5>Temperatura em celsius:  </h5>
    <form method="post">
        <input type="number" name="celsius" placeholder="Digite a temperatura:"> </input>
        <button type="submit" name="enviar" > Calcular </button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $c = $_POST["celsius"] ;
    $f = ($c * 1.8) + 32 ;
    echo "<h5> Temperatura em celsius:  " . $c . "º" . " Temperatura em Fahrenhiet:  " . $f . "º" . "</h5>" ;
}

?>