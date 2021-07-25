<?php require_once("../conexao/conexao.php"); ?>
<?php 
    // Iniciar a sessão
    session_start();

    // Criar uma variável de sessão
    $_SESSION["usuario"] = "Igor";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laur's Kitnets</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="assets/laurkitnets.png">
                <img src="assets/text_bnwcoffee.gif">
            </div>
        </header>
        
        <main>
            <?php
                echo $_SESSION["usuario"];
            ?>
            <p>
                <a href="pagina2.php">Página 2</a>
            </p>
        </main>

        <footer>
            <div id="footer_central">
                <p>Laur's &eacute; uma empresa fict&iacute;cia, usada para o curso PHP Integra&ccedil;&atilde;o com MySQL.</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>