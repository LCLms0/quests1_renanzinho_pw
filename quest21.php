<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 21</title>
</head>
<body>
    <h3>21. Escrever um algoritmo que leia os dados de “N” pessoas (nome, sexo, idade e saúde) 
        e informe se está apta ou não para cumprir o serviço militar obrigatório. Informe os totais. </h3>
    <br> <br>

    <form method="post">
        <input  type="number" name="qtd" placeholder="Pessoas para Cadastrar: " required>
        <br> <br>
        <button type="submit" name="cadastrar" > Enviar </button>
    </form>
    
<?php
if (isset($_POST["enviar"])) {
    
    $nomes = $_POST["nome"] ;
    $sexos = $_POST["sexo"] ;
    $idades = $_POST["idade"] ;
    $saudes = $_POST["saude"] ;
  
    $aptos = 0;
    $nao_aptos = 0;

    foreach ($nomes as $i => $nome) {
            if ($sexos[$i] == "M" && $idades[$i] >= 18 && $saudes[$i] == "boa" )  {
                echo "<h1> Olá: " . $nome . " você está apto ao serviço Militar Obrigatório! </h1>" ;
                $aptos ++;
            } else {
                echo "<h1> Olá: " . $nome . " você não está apto ao serviço Militar Obrigatório! </h1>" ;
                $nao_aptos ++;
            }
    }

    echo "<h1>Total de Aptos:  " . $aptos . "</h1>";
    echo "<h1>Total de não Aptos:  " . $nao_aptos . "</h1>";
}
?>

<?php  
if (isset($_POST["cadastrar"])) { ?>
    <form method="post">
    <?php
    $qtd = $_POST["qtd"] ?? 0 ;
    for ($i = 1; $i <= $qtd ; $i++) {  ?>
        <?php echo "<h1>Digite o Nome da pessoa: " . $i . " </h1>" ; ?>
        <input type="text" name="nome[]" placeholder="Digite o nome da Pessoa:  " required>
        <?php echo "<h1>Selecione o sexo da pessoa: " . $i . " </h1>" ; ?>
        <select name="sexo[]" required >
            <option value="M"> Masculino </option>
            <option value="F"> Feminino </option>
        </select>
        <?php echo "<h1>Digite a idade da pessoa: " . $i . " </h1>" ; ?>
        <input  type="number" name="idade[]" placeholder="Idade da Pessoa: " required>
        <?php echo "<h1>Selecione a Saúde da pessoa: " . $i . " </h1>" ; ?>
        <select name="saude[]" required >
            <option value="boa"> Saúde Boa </option>
            <option value="ruim"> Saúde Ruim </option>
        </select>
    <?php } ?>
        <button type="submit" name="enviar" > Enviar </button>
    </form>

    <?php } ?>
</body>
</html>