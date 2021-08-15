<?php require_once("../conexao/conexao.php"); ?>

<?php
    session_start();

    // Protegendo página interna
    if ( !isset($_SESSION["user_portal"]) ) { // Se não tiver definido
        header("location:login.php");         // Mandarei de volta para a tela de login
    }

    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

    // Consulta ao banco de dados
    $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena ";
    $produtos .= "FROM produtos ";

    // Faz funcionar a pesquisa de nomes / filtro em um banco de dados
    if ( isset($_GET["produto"]) ) { // Pergunto se está configurado o parâmetro produto
        $nome_produto = $_GET["produto"]; // Se está configurado faremos o filtro, senao para
        $produtos .= "WHERE nomeproduto LIKE '%{$nome_produto}%' ";
    }
    
    // Conectando banco de dados
    $resultado = mysqli_query($conecta, $produtos);
    if(!$resultado) {
        die("Falha na consulta ao banco");   
    }
    
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laur's Kitnets | Área do morador</title>
        
        <!-- estilo -->
        <link href="_css/style.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
        <link href="_css/produto_pesquisa.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>      
            
            <?php // Saudação
                if ( isset($_SESSION["user_portal"]) ) {
                    echo $_SESSION["user_portal"];
                }
            ?>

            <!-- Área de pesquisa de dados -->  

            <!--<div id="janela_pesquisa">
                <form action="inicial.php" method="get">
                    <input type="text" name="produto" placeholder="Pesquisa">
                    <input type="image" name="pesquisa" src="assets/botao_search.png">
                </form>
            </div>
            -->

            <!-- iframe -->
            <iframe 
                width="100%" 
                height="500" 
                src="https://time.graphics/pt/embed?v=1&id=398351" 
                frameborder="0" 
                allowfullscreen>
            </iframe>
            <div>
                <a  
                    style="font-size: 12px; text-decoration: none;" 
                    title="Timeline generator" 
                    href="https://time.graphics"
                    target="_blank">
                        Timeline generator
                </a>
            </div>
            <div>
                <a href="https://docs.google.com/spreadsheets/d/1Xa28YRK1f1CBiILSAw75qVxI63pdizeCfSDVAUhtGGA/edit?usp=sharing"
                    target="_blank">
                    <h1>Planilha Dados Kitnets</h1>
                </a>
            </div>
	        <div>
                <iframe 
                    width="100%" 
                    height="2000" 
                    src="https://datastudio.google.com/embed/reporting/f6644dc1-6eb8-46c4-a1f1-f90c5ded57b0/page/IyxXC" 
                    frameborder="0" 
                    style="border:0" 
                    allowfullscreen>
                </iframe>
            </div>

            <div>    
                
                <h1>Pagamento inquilino</h1>
                <table border="1">
                    <tr>
                        <th>Kitnet</th>
                        <th>Nome</th>
                        <th>Vencimento</th>
                        <th>Lavanderia</th>
                    </tr>
                    <tr>
                        <td>Pequena</td>
                        <td>Marco</td>
                        <td>22</td>
                        <td>Sábado</td>
                    </tr>
                    <tr>
                        <td>Média</td>
                        <td>Tiffany</td>
                        <td>10</td>
                        <td>Sexta-feira</td>
                    </tr>
                    <tr>
                        <td>Grande</td>
                        <td>Rodrigo</td>
                        <td>02</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Luxo</td>
                        <td>Rony</td>
                        <td>16</td>
                        <td>Quinta</td>
                    </tr>
                </table>
            </div>
            
            <!-- Fim iframe -->
            
            <div id="listagem_produtos"> 
            <?php
                while($linha = mysqli_fetch_assoc($resultado)) {
            ?>
                
                <!-- LISTAGEM PRODUTOS -->
                    <?php/* include 'listagem-produtos.php'; */ ?>
                <!-- FIM LISTAGEM PRODUTOS -->
                
            <?php
                }
            ?>           
            </div>
            
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>