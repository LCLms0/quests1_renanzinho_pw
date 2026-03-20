<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 27</title>
</head>
<body>
    <h3>Questão 27: A concessionária de veículos “CARANGO” está vendendo os seus veículos com desconto. 
        Faça um algoritmo que calcule e exiba o valor do desconto e o valor a ser pago pelo cliente. 
        O desconto deverá ser calculado sobre o valor
        do veículo de acordo com o combustível (álcool – 25%, gasolina – 21% ou diesel –14%). Com valor do veículo zero
        encerra entrada de dados. Informe total de desconto e total pago pelos clientes. </h3>

<?php 
$total_pago = $_POST["total_pago"] ?? 0;
$total_descontos = $_POST["total_descontos"] ?? 0;

if (isset($_POST["enviar"])) {
    
    $valor = $_POST["valor"] ;
    $tipo = $_POST["tipo"] ;

    if ($valor == 0) {
            echo "<h1>Total de Valores Pagos:  " . $total_pago . "</h1>";
            echo "<h1>Total de Descontos:  " . $total_descontos . "</h1>";
            exit;
    }


    switch ($tipo) {
        case "alcool":
            $porcen = 0.25 ;
            break;
        case "gasolina":
            $porcen = 0.21 ;
            break;
        case "diesel":
            $porcen = 0.14 ;
            break;
    }

        $valor_final = $valor - ($porcen * $valor) ;
        $desconto = $porcen * $valor ;

        $total_descontos += $desconto;
        $total_pago += $valor_final;

        echo "<h1>Você recebeu um Desconto no Valor de:  " . $desconto . " e O valor final a ser pago, agora é: " . $valor_final . "</h1>";
}
?>
    <form method="post">
        <h1>Digite o Valor: </h1>
        <br>
        <input type="number"  step="any" name="valor" placeholder="Digite o valor:  " >
        <br> <br> <br>
        <h1>Selecione o tipo de combustível:  </h1>
        <select name="tipo">
            <option value="alcool"> álcool </option>
            <option value="gasolina"> gasolina </option>
            <option value="diesel"> diesel </option>
        </select>

        <input type="hidden" name="total_pago" value="<?php echo $total_pago; ?>">
        <input type="hidden" name="total_descontos" value="<?php echo $total_descontos; ?>">


        <br> <br>
        <button type="submit" name="enviar"> Enviar </button>
    </form>
</body>
</html>
