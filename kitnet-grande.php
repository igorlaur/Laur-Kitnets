<?php include 'header.php'; ?>
<head>
    <title>Kitnet Grande | Laur's Kitnets USP</title>
    <meta name="description" content="Kitnet grande para alugar no Butantã">
</head>

<div class="ghost-element">
    </div>
    <style> 
        #espacamento{
            padding: 0px;
        }
    </style>
    
    <div class="product-page small-11 large-12 columns no-padding small-centered" id="espacamento">
        
        <div class="global-page-container">

            <div class="product-section">
                <div class="product-info small-12 large-5 columns no-padding">
                <?php $kitgrande = array("kitnet-grande" => array(
                    "contem" => "<li>Cama BOX;</li> <li>Microondas, geladeira, fogão e armários.</li> <br>",
                    "bonus" => "<li>Porcelanato</li> <li>Internet 30mb e 15mb;</li> <li>Smart TV 32''."
                )); ?>
                    
                    <?php foreach ($kitgrande as $produto) { ?>
                        <h3>Kitnet Grande</h3>
                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>
                    
                        <h4>Bônus</h4>
                        <?php echo $produto["bonus"]; ?>
                    <?php 
                } ?> 

                    <br> <br>

                    <h5 class="text-success"><b>Preço: </b>R$ 1400.00</h5>
                    
                    <?php include "botao-indisponibilidade.php"; ?>

                </div>
                

                <div class="product-picture small-12 large-7 columns no-padding">
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-tv-horizontal.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-tv.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-cozinha.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-cama.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-banheiro.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                </div>

            </div>

            <div class="go-back small-12 columns no-padding">
                <a href="cardapio.html"><< Voltar ao Menu</a>
            </div>

        </div>
    </div>
        
    <?php include 'footer.php'; ?>

</body>

</html>