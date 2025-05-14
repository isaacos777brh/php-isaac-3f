<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC Simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Calculadora de IMC</h2>

    <form method="post">
        Peso (kg): <input type="number" name="peso"
        step="0.1" required><br><br>
        Altura (m): <input type="number" name="altura"
        step="0.01" required><br><br>
        <input class='calcule'type="submit" value="Calcular o IMC">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        //calculo do IMC
        $imc = $peso / ($altura * $altura); //formula do IMC:
        //peso / (altura * altura)
        $imc = number_format(num: $imc, decimals: 2);
        echo "<h3 class='resultado'>Cálculo do IMC</h3></div>";
        echo "<h3>Seu IMC é: $imc</h3>";
        
        echo "<br>";
    

    if ($imc <18.5) {
        echo "<p>Classificação: Abaixo do peso</p>";
    } elseif ($imc <25) {
        echo "<p>Classificação: Peso Normal</p>";
    } elseif ($imc <30) {
        echo "<p>Classificação: Sobrepeso</p>";
    } else {
        echo "<p>Classificação: Obesidade</p>";
    }
}

    ?>

</body>
</html>