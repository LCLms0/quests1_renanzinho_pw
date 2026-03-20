<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 34</title>
</head>
<body>
    <h3>Questão 34: A escola “APRENDER” faz o pagamento de seus professores por hora/aula.
        Faça um algoritmo que calcule e exiba
        o salário de um professor. Sabe-se que o valor da hora/aula segue a tabela abaixo:
        Professor Nível 1 R$12,00 por hora/aula
        Professor Nível 2 R$17,00 por hora/aula
        Professor Nível 3 R$25,00 por hora/aula </h3>

    <form method="post">
        <h1>Selecione O Nível do Professor: </h1>
        <select name="nivel">
            <option value="1">Nivél 1</option>
            <option value="2">Nivél 2</option>
            <option value="3">Nivél 3</option>
        </select>
        <br> <br>
        <h1>Digite a Quantidade de horas Trabalhadas: </h1>
        <input type="number" step="any" name="hora" placeholder="Horas/Aula: ">
        <button type="submit" name="enviar">Enviar</button>
    </form>
    
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    $nivel = $_POST["nivel"] ;
    $hora = $_POST["hora"] ;

    switch ($nivel) {
        case 1:
            $salario = $hora * 12.0 ;
            echo "<h1> Seu Sálario é: " . $salario . "</h1>";
            break;
        case 2:
            $salario = $hora * 17.0 ;
            echo "<h1> Seu Sálario é: " . $salario . "</h1>";
            break;
        case 3:
            $salario = $hora * 25.0;
            echo "<h1> Seu Sálario é: " . $salario . "</h1>";
            break;
    }
}
?>