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
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>