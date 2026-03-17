<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13</title>
</head>
<body>
    <h3> Questão 13: Faça um algoritmo que receba um número e mostre uma mensagem caso este número seja maior que 10. </h3>

    <form method="post">
        <h2> Digite o Número:  </h3>
        <input type="number" step="any" name="numero" placeholder="Digite o número:  "> </input>
        <br> <br>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php 

if (isset($_POST["enviar"])) {
    $n = $_POST["numero"] ;
    if ($n > 10) {
        echo "<h1> Este número é Maior que 10. </h1>";
    } else {
        echo "<h1> Manda outro número </h1>";
    }
}

?>