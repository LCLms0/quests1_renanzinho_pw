<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 28</title>
</head>
<body>
    <h3>Questão 28:
        Escrever um algoritmo para uma empresa que decide dar um reajuste a seus 584 funcionários de acordo com os
        seguintes critérios:
        a - 50% para aqueles que ganham menos do que três salários mínimos;
        b - 20% para aqueles que ganham entre três até dez salários mínimos;
        c - 15% para aqueles que ganham acima de dez até vinte salários mínimos;
        d - 10% para os demais funcionários.
        Leia o nome do funcionário, seu salário e o valor do salário mínimo. Calcule o seu novo salário reajustado. Escrever o
        nome do funcionário, o reajuste e seu novo salário. Calcule quanto à empresa vai aumentar sua folha de pagamento. </h3>

    <form method="post">
        <?php for ($i=1; $i <= 4 ; $i++) { ?>
            <?php echo "<h1>Funcionário: " . $i . "</h1>"; ?>
            <h2> Digite o Nome: </h2>
            <input type="text" name="nomes[]" step="any" placeholder="Digite o nome: ">
            <h2> Digite o Sálario Atual: </h2>
            <input type="number" name="salarios[]" step="any" placeholder="Digite o Sálario: ">
            <h2> Digite o Sálario Mínimo: </h2>
            <input type="number" name="salarios_minimos[]" step="any" placeholder="Digite o Sálario Mínimo: ">
       <?php } ?>
       <button type="submit" name="enviar"> Enviar Dados </button>
    </form>
</body>
</html>

<?php


if (isset($_POST["enviar"])) {
    $nomes = $_POST["nomes"] ;
    $salarios = $_POST["salarios"] ;
    $salarios_minimos = $_POST["salarios_minimos"] ;
    $total_aumento = 0;
    foreach ($nomes as $i => $nome) {
        $salario = $salarios[$i] ;
        $salario_minimo = $salarios_minimos[$i] ;


        $quantidade = $salario / $salario_minimo ;



        if ($quantidade < 3) {
            $porcen = 0.5;


        } elseif ($quantidade <= 10) {
            $porcen = 0.2;


        } elseif ($quantidade <= 20) {
            $porcen = 0.15;


        } else {
            $porcen = 0.1;


        }

        $reajuste = $porcen * $salario;
        $novo_salario = $reajuste + $salario;
        $total_aumento += $reajuste;

        echo "<h1> Olá: " . $nome . " Sálario antigo:  " . $salario . " Reajuste: " . $reajuste . " Sálario Novo: " . $novo_salario . "</h1>";
    }
    echo "<h1>A empresa Tem uma Folha De aumento de:  " . $total_aumento . "</h1>";
}

?>