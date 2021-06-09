<?php include 'header-studio.php'; ?>
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
                        "contem" => "<li>Cama BOX;</li> <li> Assinatura Amazon Prime; </li> <li>Microondas, geladeira, fogão, armários e gaveta com chave. <br> <br>",
                        "bonus" => "<li>Internet 120mb;</li> <li>Smart TV 32'; <li>Ventilador;</li> <li>Cafeteira;</li> <li>Sofá;</li> <li>Sacada;</li> <li>Cozinha americana;</li><li>Assinatura Amazon Prime.</li>"
                    )); ?>

                    <?php foreach ($kitluxo as $produto) { ?>
                        
                        <h3 id="kitluxo">Studio</h3>
                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>

                        <?php 
                        echo('teste');
                        ?>

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
                    <h5 class="text-success"><b>Preço: </b>R$ 3500.00</h5>
                    <?php include "botao-indisponibilidade.php"; ?> 
                    <a href="https://bit.ly/2QRSgQq" target="blank"><button id="btnairbnb">Rerservar via Airbnb!</button></a> 
                    <br> <br>
                    <div class="product-info small-12 large-5 columns no-padding">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12300.591430780612!2d-46.713423719407025!3d-23.568884803657266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ad07258d511c32c!2sQuaddra%20Butanta!5e0!3m2!1spt-BR!2sbr!4v1622603039438!5m2!1spt-BR!2sbr" width="360" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                    </div>
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
                    <img src="img/kitnet/studio/studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/sacada-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/fachada-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/fachada-studio1.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/piscina-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/churrasqueira-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/quadra-esportiva-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img id="imediacoes" src="img/kitnet/studio/pet-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/cinema-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/academia-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/salao-de-festas-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/hall-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/oficina-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/lavanderia-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/bicicletaria-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/espaco-beauty-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/salao-de-jogos-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/brinquedoteca-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/coworking-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/conveniencia-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/mapa-studio.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/mapa-studio1.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/studio/mapa-studio2.jpeg" alt="Kitnet executiva no butantã próximo ao Metrô / USP" title="Foto da Kitnet executiva no butantã próximo ao Metrô / USP"> <br> <br>

                </div>

            </div>

            <?php include 'voltarMenu.php'; ?>

        </div>
    </div>
        
    <?php include 'footer.php'; ?>

</body>

</html>