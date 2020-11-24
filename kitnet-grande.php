<?php include 'header.php'; ?>
<html class="no-js" lang="pt-br">
<head>
    <title>Kitnet Grande | Laur's Kitnets USP</title>
    <meta name="description" content="Kitnet Grande para alugar no Butantã">
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
                    "contem" => "<li>Cama BOX;</li> 
                                <li>Ventilador;</li> 
                                <li>Microondas, geladeira, fogão e armários.</li> <br>",
                    
                    "bonus" => "<li>Porcelanato</li> 
                                <li>Internet 120mb;</li> 
                                <li>Smart TV 32'';</li>
                                <li>Sofá</li> 
                                <li>Assinatura Amazon Prime.</li>" 
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

                    <h5 class="text-success"><b>Preço: </b>R$ 1450.00</h5>
                    <a href="https://airbnb.com/h/kitnet-grande" target="blank"><button id="btnairbnb">Rerservar via Airbnb!</button></a> 
                    <?php include "botao-disponibilidade.php"; ?>

                </div>
                
                <style>
                    #btn:hover{
                        background-color: rgb(0, 102, 26);
                    }
                    #btnairbnb{
                        background-color: #FF5500;
                    }
                    #btnairbnb:hover{
                        background-color: orange;
                    }
                </style>

                <div class="product-picture small-12 large-7 columns no-padding">
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-escritorio.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-escritorio2.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-cozinha.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-escritorio3.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-sofa.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-banheiro.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                </div>

            </div>

            <?php include 'voltarMenu.php'; ?>
            
        </div>
    </div>
        
    <?php include 'footer.php'; ?>

</body>

</html>