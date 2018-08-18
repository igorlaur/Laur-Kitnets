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
                    <?php $kitluxo = array("kit-luxo" => array(
                                                    "contem" => "<li>Cama BOX;</li> <li>Microondas, geladeira, fogão, armários e gaveta com chave. <br> <br>",
                                                    "bonus" => "<li>Internet 30mb e 15mb;</li> <li>Smart TV 32'; <li>Ventilador;</li> <li>Cafeteira;</li> <li>Sofá;</li> <li>Sacada;</li> <li>Cozinha americana;</li>"
                                    )
                    ); ?>


                    <?php foreach ($kitluxo as $produto){ ?>
                        
                        <h3>Kitnet Luxo</h3>
                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>

                        <h4>Bônus</h4>
                        <?php echo $produto["bonus"]; ?>

                    <?php } ?>

                    <br>
                    <h5 class="text-success"><b>Preço: </b>R$ 1700.00</h5>
                    <a href="reserva.php"><button id="btn">Rerservar já!</button></a> 
                </div>
                <style>
                    #btn{
                        background-color: green;
                    }
                    #btn:hover{
                        background-color: rgb(0, 102, 26);
                    }
                </style>

                <div class="product-picture small-12 large-7 columns no-padding">
                    <img src="img/cardapio/kitnet-luxo.jpg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnetluxo-sala.jpg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnet-luxo-sala1.jpeg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnet-luxo-cozinha.jpeg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnet-luxo-cozinha1.jpeg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/varanda.jpg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnet-luxo-quarto.jpg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnet-luxo-quarto1.jpg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnet-luxo-quarto2.jpeg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnet-luxo-quarto3.jpeg" alt="kit-luxo"> <br> <br>
                    <img src="img/cardapio/kitnet-luxo-banheiro.jpg" alt="kit-luxo"> <br> <br>
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