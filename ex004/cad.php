<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--link css-->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            
            //variavel super global, a variavel REQUEST e uma junção de GET, POST & COOKIES
            //var_dump($_REQUEST);

            //variaveis a partir da variavel super global
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["snome"] ?? "sem sobrenome";

            //mensagem no formato html 
            echo "<p>E um prazer te conhecer! <strong>$nome $sobrenome</strong>.</p>";

        ?>

        <!-- link em javascript para voltar direto para paagina anterior -->
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>

    </main>
</body>
</html>