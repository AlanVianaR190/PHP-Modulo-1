<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                // COOKIE
                // o cookies têm uma vida útil definida pelo parâmetro time() na função setcookie()
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                //SESSION
                //A função session_start() precisa ser chamada antes de tentar acessar ou definir qualquer variável. Ela permite que você use variáveis de sessão.
                session_start();
                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h1>Super global GET</h1>";
                var_dump($_GET);
                // Uma query string é uma parte de uma URL que contém dados que são passados para o servidor como parte de uma solicitação HTTP GET.
                
                echo "<h1>Super global POST</h1>";
                var_dump($_POST);
                // Em uma solicitação HTTP POST os dados enviados são geralmente enviados no corpo (body) da requisição em vez de na própria URL.

                echo "<h1>Super global REQUEST</h1>";
                var_dump($_REQUEST);
                // A variável $_REQUEST é uma superglobal que contém os dados enviados para o script PHP através de solicitações HTTP independentemente do método de solicitação GET ou POST.

                echo "<h1>Super global COOKIE</h1>";
                var_dump($_COOKIE);
                // A variável $_COOKIE é uma superglobal que contém todos os cookies que foram enviados pelo cliente (navegador) para o servidor.

                echo "<h1>Super global SESSION</h1>";
                var_dump($_SESSION);
                // A variável $_SESSION é uma superglobal que é usada para armazenar dados de sessão do usuário entre as requisições HTTP, Ao contrário dos cookies que são armazenados no navegador do usuário as sessões são armazenadas no servidor.

                echo "<h1>Super global SERVER</h1>";
                var_dump($_SERVER);
                // à variável $_SERVER contém informações sobre o servidor web e o ambiente em que o script está sendo executado, significa que está disponível em todo o escopo do script.

                echo "<h1>Super global GLOBALS</h1>";
                var_dump($GLOBALS);
                //A variável $GLOBALS é usada para acessar variáveis globais de qualquer lugar do script independentemente do escopo em que essas variáveis foram definidas Ela é um array associativo que contém todas as variáveis globais disponíveis no escopo atual do script.

            ?>
        </pre>
    </main>
</body>
</html>