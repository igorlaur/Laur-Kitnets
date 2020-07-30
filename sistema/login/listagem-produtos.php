<ul>
    <li class="imagem">
        <a href="detalhe.php?codigo=<?php echo $linha['produtoID'] ?>"> <!-- Coloquei o 'produtoID' para aparecer como parâmetro neste meu link -->
            <img src="<?php echo $linha["imagempequena"] ?>">
        </a>
    </li>
    <li><h3><?php echo $linha["nomeproduto"] ?></h3></li>
    <li>Tempo de Entrega : <?php echo $linha["tempoentrega"] ?></li>
    <li>Pre&ccedil;o unit&aacute;rio: <?php echo $linha["precounitario"] ?></li>    

</ul>