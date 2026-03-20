<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 36</title>
</head>
<body>
    <h3>Questão 36: Faça um algoritmo que calcule o valor da conta de luz de uma pessoa. 
        Sabe-se que o cálculo da conta de luz segue a tabela abaixo:
        Tipo de Cliente Valor do KW/h
        1 (Residência) 0,60
        2 (Comércio) 0,48
        3 (Indústria) 1,29 </h3>

    <form method="post">
        <h1>Selecione Seu Local: </h1>
        <select name="local">
            <option value="1">Residência</option>
            <option value="2">Comércio</option>
            <option value="3">Indústria</option>
        </select>
        <h1>Quantidade de KW/h Consumido: </h1>
        <input type="number" step="any" name="consumo" placeholder="Consumo: ">
        <button type="submit" name="enviar">enviar </button>
    </form>
    
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $local = $_POST["local"] ;
    $consumo = $_POST["consumo"] ;

    if ($local == "1") {
        $total = $consumo * 0.60;
        echo "<h1>Total a ser pago: " . $total . "</h1>";
    } elseif ($local == "2") {
        $total = $consumo * 0.48;
        echo "<h1>Total a ser pago: " . $total . "</h1>";
    } else {
        $total = $consumo * 1.29;
        echo "<h1>Total a ser pago: " . $total . "</h1>";
    }

}



?>