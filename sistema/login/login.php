<?php require_once("../conexao/conexao.php"); ?>
<?php
    // Add variáveis de sessão
    session_start(); 
    if ( isset( $_POST["usuario"]) ) { // Pergunto se está configurado
        $usuario = $_POST["usuario"];
        $senha   = $_POST["senha"];

        $login = "SELECT * ";
        $login .= "FROM clientes ";
        $login .= "WHERE usuario = '{$usuario}' and senha = '{$senha}' ";

        $acesso = mysqli_query($conecta, $login); 
        if ( !$acesso ){
            die("Falha na consulta ao banco");
        }

        $informacao = mysqli_fetch_assoc($acesso);

        if( empty($informacao) ){ // Se não tiver registro no banco de dados, de usuários, será empty/vazio
            $mensagem = "Login sem sucesso";
        } else {
            $_SESSION["user_portal"] = "Seja bem-vindo(a), " . $informacao["nomecompleto"]; // Eu do um nome para a variável de sessão
            header("location:listagem.php");
        }

    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laur's Kitnets | Login</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
        <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">

        <link rel="stylesheet" href="../../css/foundation.css" />
        <link rel="stylesheet" href="../../css/slick.css" />
        <link rel="stylesheet" href="../../css/style.css" />
        
    </head>

    <body>
        
        
        <main>  
            
        <div class="card w-75" id="descricao">
        <div class="card-body">
            <h5 class="card-header">Tela de Login</h5>
            <small id="emailHelp" class="form-text text-muted">Área exclusiva para moradores de Laur's Kitnets</small>
            <form action="login.php" method="post"> <!-- Usei post porque não quero expor o username nem a senha no navegador -->
                <div class="form-group col-sm"> <br>
                    <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                    <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu e-mail</small>
                </div>
                <div class="form-group col-sm">
                    <input type="password" class="form-control" name="senha" placeholder="Senha"> <br>
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
      
                <?php
                    if ( isset($mensagem) ) { // Se está definido a variável mensagem
                ?>
                    <button><?php echo $mensagem ?></button>
                <?php
                    }
                ?>
                
                <style>
                    button{
                        background-color: red;
                    }
                </style>
            </div>
        </div>
            </form>

        </main>

        <footer>
            <div id="footer_central">
                <p><?php $ano_atual = date("Y"); ?> <!-- Função Date pega o ano atual -->
                <?php echo $ano_atual; ?>&copy; Todos os direitos reservados   -   Igor Laur</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>