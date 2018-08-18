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
                    <button id="btn">Indisponível</button>
                </div>
                <style>
                    #btn{
                        background-color: rgb(204, 0, 0);
                    }
                    #btn:hover{
                        background-color: rgb(148, 0, 0);
                    }
                </style>

                <div class="product-picture small-12 large-7 columns no-padding">
                    <img src="img/cardapio/kitnet-media.jpeg" alt="cheesecake de cereja"> <br> <br>
                    <img src="img/cardapio/kitnet-media2.jpg" alt="cheesecake de cereja"> <br> <br>
                    <img src="img/cardapio/kitnet-media-tv.jpeg" alt="cheesecake de cereja"> <br> <br>
                    <img src="img/cardapio/kitnet-media-cozinha.jpg" alt="cheesecake de cereja"> <br> <br>
                    <img src="img/cardapio/kitnet-media-geladeira.jpg" alt="cheesecake de cereja"> <br> <br>
                    <img src="img/cardapio/kitnet-media-banheiro.jpg" alt="cheesecake de cereja"> <br> <br>
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