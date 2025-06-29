<?php include 'header.php'; ?>
<?php include 'icones-contato.php'; ?>
<html class="no-js" lang="pt-br">
<!-- Facebook SDK -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
        appId      : '335462494253345',
        xfbml      : true,
        version    : 'v10.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- /Facebook SDK -->
<head>
    <title>Kitnet Luxo | Laur's Kitnets USP</title>
    <meta name="description" content="Kitnet Luxo para alugar no Butantã">
</head>
    <!--<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laur's Kitnets USP</title>
        <link rel="stylesheet" href="../css/foundation.css" />
        <link rel="stylesheet" href="../css/slick.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Permanent+Marker|Raleway:400,700" rel="stylesheet">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="icon" href="../img/logo/logo.jpg" type="image/x-icon" />
        <link rel="shortcut icon" href="../img/logo/logo.jpg" type="image/x-icon" />
        <script src="../js/vendor/modernizr.js"></script>
    </head>-->
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
                        "contem" => "<li>Cama BOX;</li> <li> Netflix; </li> <li>Microondas, geladeira, fogão, armários e gaveta com chave. <br> <br>",
                        "bonus" => "<li>Internet 300mb;</li> <li>Netflix;</li> <li>Smart TV 32'; <li>Ventilador;</li> <li>Cafeteira;</li> <li>Sofá;</li> <li>Sacada;</li> <li>Cozinha americana;</li>"
                    )); ?>

                    <?php foreach ($kitluxo as $produto) { ?>
                        
                        <h3 id="kitluxo">Studio</h3>
                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>

                        <h4>Bônus</h4>
                        <?php echo $produto["bonus"]; ?>

                    <?php 
                } ?>
                    <br>
                    <div
                        class="fb-like"
                        data-share="true"
                        data-width="350"
                        data-show-faces="true">
                    </div>

                    <br> <br>
                    <h5 class="text-success"><b>Preço: </b>R$ 2400.00</h5>
                    <?php include "botao-indisponibilidade.php"; ?> 
                    <a href="https://bit.ly/2QRSgQq" target="blank"><button id="btnairbnb">Rerservar via Airbnb!</button></a> 
                    <br> <br>
                    <h5>*Apenas esta Kitnet é possível reservar via Airbnb</h5>
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
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-sala.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-sala.JPG" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-sala2.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-sala4.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-sala3.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-cozinha.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-cozinha-cafeteira.JPG" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-cozinha1.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-varanda.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-varanda1.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-quarto.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-quarto1.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-quarto2.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo-banheiro.jpg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                </div>

            </div>

            <?php include 'voltarMenu.php'; ?>

        </div>
    </div>
        
    <?php include 'footer.php'; ?>

</body>

</html>