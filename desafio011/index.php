<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio em PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main > h1{
            color: #372991;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        // formatação de moedas com internacionalização
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $valor = $_REQUEST["valor"] ?? 0;
        $percent = $_REQUEST["porcentagem"] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do produto (R$):</label>
            <input type="number" name="valor" id="valor" min="0.10" step="0.01" value="<?=$valor?>">
            
            <!-- A tag <span> não tem nenhuma função específica, é usada para modificar propriedades do texto ou separar partes do texto de forma que o código CSS ou a programação javascript possam atuar nestes trechos. -->
            <label for="porcentagem">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$percent?>">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $aumento = ($valor * $percent) / 100;
        $resultado = $valor + $aumento;
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?=numfmt_format_currency($padrao, $valor, "BRL")?> com <strong><?=$percent?>% de aumento</strong> vai passar a custar <strong><?=numfmt_format_currency($padrao, $resultado, "BRL")?></strong> a partir de agora.</p>
    </section>
    
    <!-- A tag <script> cria um espaço para que um código de programação javascript seja incorporado dentro do próprio documento HTML, ou carrega um código javascript externamente. -->
    <script>

        // a função é chamada assim que carregar a pagina
        mudaValor()

        // função para alterar o caractere
        function mudaValor(){
            p.innerText = porcentagem.value;
        }
    </script>
</body>
</html>