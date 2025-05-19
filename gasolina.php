<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasolina-Consumo PHP</title>
    <link rel="stylesheet" href="gasolina.css">
</head>
<body>
    <h1>Consumo de Gasolina</h1>
    <form method="post">
        Nome: <input type="text" name="nome"><br><br>
        Distância Percorrida (Km): <input type="number" name="distancia-percorrida"
        step="0.1" required><br><br>
        Combustivel Gasto (L): <input type="number" name="combustivel"
        step="0.1" required><br><br>
        <input type="submit"id='calculo' value="Calcular">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $distancia = $_POST['distancia-percorrida'];
        $combustivel = $_POST['combustivel'];

        //calculo do consumo médio
        $cm = $distancia / $combustivel; //formula do consumo médio:
        //distancia / combustivel 
        $cm = number_format(num: $cm, decimals: 2);
        echo "<h3>Cálculo do Consumo Médio: $cm</h3>";
        echo "<h3>Oi $nome, o seu consumo médio foi de: $cm km/l.</h3>";
        
        echo "<br>";
        if ($cm <=8) {
        echo "<p>Classificação: Alto Consumo</p>";
    } elseif ($cm > 8 and $cm <= 14) {
        echo "<p>Classificação: Consumo Moderado</p>";
    } elseif ($cm > 14) {
        echo "<p>Classificação: Bom Consumo</p>";
}
    }
?>
    

</body>
</html>