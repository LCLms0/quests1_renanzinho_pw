<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 30</title>
</head>
<body>
    <h3>Questão 30: Faça um algoritmo que receba o nome a idade, o sexo e salário fixo de um funcionário. Mostre o nome e o salário líquido: </h3>

    <form method="post">
        <h1>Digite o nome do funcionario: </h1>
        <input type="text" name="nome" placeholder="Digite seu nome: ">
        <h1>Digite a idade do funcionario: </h1>
        <input type="number" name="idade" placeholder="Digite sua idade: ">
        <h1>Digite o Salário fixo do funcionario: </h1>
        <input type="number" name="salario" step="any" placeholder="Digite o Sálario: ">
        <h1>Selecione o sexo do funcionario: </h1>
        <select name="sexo">
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select>
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $nome = $_POST["nome"] ;
    $idade = $_POST["idade"] ;
    $sexo = $_POST["sexo"] ;
    $salario = $_POST["salario"] ;

    if ($sexo == "m") {
        if ($idade >= 30) {
            $abono = 100;
        } else {
            $abono = 50;
        }
    } else {
        if ($idade >= 30) {
            $abono = 200;
        } else {
            $abono = 80;
        }
    }

    $salario_liquido = $salario + $abono;
    echo "<h1>Olá " . $nome . " Seu Sálario Líquido: " . $salario_liquido;

}

?>