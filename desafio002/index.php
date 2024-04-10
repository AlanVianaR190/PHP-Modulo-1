<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
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
        <h1>Trabalhando com numeros aleatorios</h1>

        <!--  codigo php-->
        <?php 
        
            //variavel com função randomica
            $num = mt_rand(1, 100);

            echo "<p>Trabalhando com numeros aleatorios entre 1 até 100... <br> O valor gerado foi <strong>$num</strong></p>"

            /* Funções randomicas 
            rand() Linear Congreation Generator, criada em 1951, usada no PHP 7 e anteriores 
            mt_rand() Mersenne Twister, criada em 1997, usada a partir do PHP 7.1
            random_int() gera numeros criptografados e segguros, porem e mais lento que o demais
            */
        
        ?>

        <!-- botão para atualizar  a pagina -->
        <button onclick="javascript:window.location.reload()">Gerar novamente</button>

    </main>
</body>
</html>