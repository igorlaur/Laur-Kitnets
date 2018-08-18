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
                <?php $kitpequena = array("kitnet-pequena" => array(
                                                            "contem" => "<li> Cama BOX; </li> <li> TV 22''; </li>
                                                            <li> Internet 15mb; </li> <li> Microondas, geladeira, fogão 
                                                            e armários. </li>"
                                                            
                                    )
                );?>
                    <?php foreach ($kitpequena as $produto){ ?>
                        <h3>Kitnet pequena</h3>
                        <h4>Contém</h4>
                        
                        <?php echo $produto["contem"]; ?>
                        <br>
                    <?php } ?>
                    
                    <h4>Bônus</h4>

                    <li class="text-success">Valor mais acessível.</li>
                    <br>
                    <h5 class="text-success"><b>Preço: </b>R$ 1200.00</h5>
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
                    <img src="img/cardapio/kitnet-pequena-porta.jpg" alt="pequena"> <br> <br>
                    <img src="img/cardapio/kitnet-pequena-cozinha.jpg" alt="pequena"> <br> <br>
                    <img src="img/cardapio/kitnet-pequena.jpg" alt="pequena"> <br> <br>
                    <img src="img/cardapio/kitnet-pequena-cama.jpg" alt="pequena"> <br> <br>
                    <img src="img/cardapio/kitnet-pequena-cozinha2.jpg" alt="pequena"> <br> <br>
                    <img src="img/cardapio/Kitnet-pequena-tv.jpeg" alt="pequena"> <br> <br>
                    <img src="img/cardapio/kitnet-pequena-banheiro.jpg" alt="pequena"> <br> <br>

                    
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