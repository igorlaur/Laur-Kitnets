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

        // Criando página individual -----------------------------------------

       /* if( empty($informacao) ){ // Se não tiver registro no banco de dados, de usuários, será empty/vazio
            $mensagem = "Você deve ser morador para efetuar login";
        } else {
            // Salva os dados encontrados na variável $resultado
            $resultado = mysqli_fetch_assoc($query);

            // Se a sessão não existir, inicia uma
            if (!isset($_SESSION)) session_start();

            // Salva os dados na sessão
            $_SESSION['usuario'] = $resultado['id'];
            $_SESSION['nomecompleto'] = $resultado['nome'];
            $_SESSION['nivel'] = $resultado['nivel'];

            // Redireciona o visitante 
            header("Location: listagem2.php"); exit;
        }   
        */
        
        
        if( empty($informacao) ){ // Se não tiver registro no banco de dados, de usuários, será empty/vazio
            $mensagem = "Você deve ser morador para efetuar login";
        } else {
            $_SESSION["user_portal"] = "Seja bem-vindo(a), " . $informacao["nomecompleto"]; // Eu do um nome para a variável de sessão
            header("location:listagem.php");
        }

    }
?>
<!doctype html>
<html title="Sistema de login">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gerencial de Laur's Kitnets"
        <title>Laur's Kitnets | Login</title>
        
        <!-- estilo -->
        
        <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">

        <link rel="stylesheet" href="../../css/foundation.css" />
        
        
        
    </head>

    <body>
    <style>

        #descricao{
            margin: auto;
            box-shadow: 1px 1px 20px rgba(255,165,0);
        }
        #login{
            color: white;
        }
        .card-header{
            background-color: #FFBF00;
            color: white;
            text-align: center;
        }
    </style>

        <main>  
            
       <br>

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
                    <input type="submit" class="btn btn-warning" value="Login" id="login">
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
<br>
        <footer class="text-center">
            <div>
                <p><?php $ano_atual = date("Y"); ?> <!-- Função Date pega o ano atual -->
                <?php echo $ano_atual; ?>&copy; Todos os direitos reservados.</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>