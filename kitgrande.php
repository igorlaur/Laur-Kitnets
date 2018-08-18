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
                <?php $kitgrande = array("kitnet-grande" => array(
                                                            "contem" => "<li>Cama BOX;</li> <li>Microondas, geladeira, fogão e armários.</li> <br>",
                                                            "bonus" => "<li>Internet 30mb e 15mb;</li> <li>Smart TV 32''."
                                    )
                ); ?>
                    
                    <?php foreach ($kitgrande as $produto){ ?>
                        <h3>Kitnet Grande</h3>
                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>
                    
                        <h4>Bônus</h4>
                        <?php echo $produto["bonus"]; ?>
                    <?php } ?> 

                    <br> <br>

                    <h5 class="text-success"><b>Preço: </b>R$ 1400.00</h5>
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
                    <img src="img/cardapio/kit-grande-tv-horizontal.jpeg" alt="picanha"> <br> <br>
                    <img src="img/cardapio/kit-grande-tv.jpeg" alt="picanha"> <br> <br>
                    <img src="img/cardapio/kit-grande-cozinha.jpg" alt="picanha"> <br> <br>
                    <img src="img/cardapio/kit-grande-cama.jpeg" alt="picanha"> <br> <br>
                    <img src="img/cardapio/kit-grande-luxo.jpg" alt="picanha"> <br> <br>
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