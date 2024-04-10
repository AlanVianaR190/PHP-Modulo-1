<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main > h1{
            color: #372991;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- variaveis, divisor com operador de coalescência nula 1 para não dar zeroDivisorError  -->
    <?php 
        $dividendo = $_REQUEST["div1"] ?? 0;
        $divisor = $_REQUEST["div2"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <!-- formulário submetido pela própria página em que o formulário está -->
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <!-- campo de entrada do dividendo usando short tag -->
            <input type="number" name="div1" id="div1" min="0" value="<?=$dividendo?>">
            <label for="divisor">Divisor:</label>
            <!-- campo de entrada do divisor usando sgort tag -->
            <input type="number" name="div2" id="div2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <!-- variaveis -->
        <?php 
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>
        <!-- tag de tabela -->
        <table class="divisao">
            <!-- tag de linha de tabela -->
            <tr>
                <!-- tag de coluna de tabela, com as short tags -->
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
        <!-- tag de lista  -->
        <ul>
            <!-- tag de item de lista, com as short tags -->
            <li>O dividendo é: <strong><?=$dividendo?></strong>.</li>
            <li>O divisor é: <strong><?=$divisor?></strong>.</li>
            <li>O quociente é: <strong><?=$quociente?></strong>.</li>
            <li>O resto é: <strong><?=$resto?></strong>.</li>
        </ul>
    </section>
</body>
</html>
