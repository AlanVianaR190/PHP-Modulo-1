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
        <h1>Conversor de moedas</h1>

        <?php 
        
            // variavel a partir do valor digitado
            $val = $_REQUEST["valor"] ?? 0;

            // cotação
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($url), true);
    
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $new_val = $val / $cotacao;

            // formatação de moedas com internacionalização
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // variavel formatando para real e dolar
            $real = numfmt_format_currency($padrao, $val, "BRL");
            $dolar = numfmt_format_currency($padrao, $new_val, "USD");

            echo "<p>Seu $real equivalem a <strong>$dolar</strong></p>";
        
        ?>

        <!-- botão de voltar -->
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>

    </main>
</body>
</html>