<?php include 'header.php'; ?>
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
                <?php $kitmedia = array("kitnet-media" => array(
                                                          "contem" => "<li>Cama BOX;</li> <li>Internet 15mb;</li>
                                                          <li>Microondas, geladeira, fogão e armários.</li> <br>",
                                                          "bonus" => "<li>Smart TV 32'';</li> <li>Ventilador;</li> <li>Janela para rua.</li>"
                                )
                ); ?>
                    <?php foreach ($kitmedia as $produto){ ?>
                        
                        <h3>Kitnet Média</h3>

                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>

                        <h4>Bônus</h4>
                        <?php echo $produto["bonus"]; ?>

                    <?php } ?>
                    
                    <br>
                    <h5 class="text-success"><b>Preço: </b>R$ 1300.00</h5>

                    <?php include 'botao-disponibilidade.php'; ?>

                </div>
                

                <div class="product-picture small-12 large-7 columns no-padding">
                    <img src="img/kitnet/kitnet-media/kitnet-butanta-media.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/kitnet-butanta-media2.jpg" alt="Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/kitnet-butanta-media-tv.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/kitnet-butanta-media-cozinha.jpg" alt="Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/kitnet-butanta-media-geladeira.jpg" alt="Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/kitnet-butanta-media-banheiro.jpg" alt="Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
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