<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main > h1{
            color: #372991;
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
        <h1>Analisador de Numero Real</h1>
        <?php 
            $num = $_REQUEST["num"] ?? 0;
            // var_dump($num);
            // a função number_format() parametros: variavel, numero de casas decimais, caracter p separar numeros fracionarios, caracter separar numeros unidade de milhar 
            echo '<p>Analisando o numero <strong>'.number_format($num, 3, ",", ".") .'</strong> informado pelo usuario:</p>';
            $numInt = (int) $num;
            echo '<ul><li>A parte inteira do numero é <strong>'.number_format($numInt, 0, ",", ".").'</strong></li>';
            $numFra = $num - $numInt;
            echo '<li>A parte fracionaria do numero é <strong>'.number_format($numFra, 3, ",", ".").'</strong></li></ul>';
        ?>
        <button onclick="javascript:window.location.href='index.html'" >Voltar</button>
    </main>
</body>
</html>