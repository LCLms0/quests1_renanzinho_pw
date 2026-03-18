<?php 
        if (isset($_POST["enviar"])) {

            $valor = $_POST["valor"] ;
            $ano = $_POST["ano"] ;

            $geral_carros = $_POST["geral_carros"] ?? 0 ;
            $carros_2000 = $_POST["carros_2000"] ?? 0 ;

            if ($ano <= 2000) {
                $porcen = 0.12 ;
                $valor_descontado = $valor - ($porcen * $valor) ;
                $geral_carros ++;
                $carros_2000 ++;

                echo "<h2>O carro Inserido Custa:  " . $valor . "  Mas você Recebeu Um Desconto de 12% , e agora ele Custa:  " . $valor_descontado . "</h2>" ;
            } else {
                $porcen = 0.07 ;
                $valor_descontado = $valor - ($porcen * $valor) ;
                $geral_carros ++;

                echo "<h2>O carro Inserido Custa:  " . $valor . "  Mas você Recebeu Um Desconto de 7% , e agora ele Custa:  " . $valor_descontado . "</h2>" ;
            }
        
            if ($_POST["continuar"] == "N") {
                echo "<h1> Total de Carros Geral:  " . $geral_carros . "</h1>" ;
                echo "<h1> Total de Carros até anos 2000:  " . $carros_2000 . "</h1>" ;
            }
        }

    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 20</title>
</head>
<body>
    <h3>Questão 20: A concessionária de veículos “CARANGO VELHO” está vendendo os seus veículos com desconto. <br>
        Faça um algoritmo que calcule e exiba o valor do desconto e o valor a ser pago pelo cliente de vários carros. <br>
        O desconto deverá ser calculado de acordo com o ano do veículo. <br>
        Até 2000 - 12% e acima de 2000 - 7%. O sistema deverá perguntar se <br>
        deseja continuar calculando desconto até que a resposta seja: “(N) Não” . Informar total de carros com ano até 2000 e total geral. </h3>
    <br> <br> <br>
    <form method="post">
            <h1> Olá Bem Vindo a concessionária de veículos “Carango velho". </h1>
            <br> <br>
            <h2>Digite o ano do Carro Desejado:  </h2>
            <input type="number" name="ano" placeholder="Digite o Ano:  " required>
            <br> <br>
            <h2>Digite o valor do Carro Desejado:  </h2>
            <input type="number" name="valor" placeholder="Digite o valor:  " required>
            <br> <br>
            <h2>Deseja Continuar?</h2> <br>
            <select name="continuar" required>
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>

            <input type="hidden" name="geral_carros" value="<?= $geral_carros  ?>">
            <input type="hidden" name="carros_2000" value="<?= $carros_2000  ?>">

        <button type="submit" name="enviar" > Enviar </button>
        </form>
</body>
</html>
