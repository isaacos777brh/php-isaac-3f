<h1>Bem-vindo à aula de PHP!</h1>

<?php
    //comentário de uma linha
    echo "Olá mundo<br>";

    echo "bem vindo a aula!!<br>";

    //variaveis a baixo
    $nome = "João";
    $preco = 11.90;
    $soma = $preco * 4;
    $soma = number_format(num: $soma, decimals: 2);

    //mostrando resultado
    echo "o nome do cliente é $nome<br>";
    echo "o preço unitário da revista é R$ $preco<br>";
    echo "o total é R$ $soma<br>";
    
    date_default_timezone_set(timezoneId: 'America/Recife');
    $hora = (int)date(format: 'H');
    if ($hora < 12) {
        echo "Bom dia";
    } elseif ($hora >= 12 && $hora < 18) {
        echo "Boa tarde";
    } else {
        echo "Boa noite";
    }
?>