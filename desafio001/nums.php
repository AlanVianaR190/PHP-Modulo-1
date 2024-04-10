<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--link css-->
    <link rel="stylesheet" href="style.css">

    <!--  -->
    <style>
        main > h1{
            color: #372991;
            text-align: center;
        }
    </style>

</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>

    <main>
        <?php 
        
        $num = $_REQUEST["num"] ?? 0;
        echo "<p>O numero escolhido foi <strong>$num</strong></p>";

        //
        $ant = $num - 1;
        echo "<p>Seu antecessor é <strong>$ant</strong></p>";

        //
        $suc = $num + 1;
        echo "<p>Seu sucessor é <strong>$suc</strong></p>";
        
        ?>

        <!-- link em javascript para voltar direto para paagina anterior -->
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>

    </main>
</body>
</html>