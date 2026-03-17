<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
    <h3> Questão 4: Escrever um algoritmo que leia o nome de um vendedor, <br>
        o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). <br>
        Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o seu nome, <br>
        o salário fixo e salário no final do mês. </h3>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite o nome do vendendor: "></input> <br> <br>
        <input type="number" name="salario_fixo" placeholder="Digite o Salário fixo: "></input> <br> <br>
        <input type="number" name="vendas" placeholder="Digite o Total de vendas em dinheiro: "></input>
        <button type="submit" name="enviar" > Enviar </button>
    </form>
</body>
</html>

<?php 

if (isset($_POST["enviar"])){
    
    $nome = $_POST["nome"] ;
    $salario_fixo = $_POST["salario_fixo"] ;
    $vendas = $_POST["vendas"] ;
    $aumento = $vendas* 0.15 ;
    $salario_final = $salario_fixo + $aumento ;

    echo "<h1> Nome do Vendendor: " . $nome . "</h1>" . "<br>" ;
    echo "<h1> Salário Fixo: " . $salario_fixo . "</h1>" . "<br>" ;
    echo "<h1> Salário Final: " . $salario_final . "</h1>" . "<br>" ; 
}

?>

