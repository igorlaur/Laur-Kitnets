<?php include 'header-kitpequena.php'; ?>
<?php include 'icones-contato.php'; ?>
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
<html class="no-js" lang="pt-br">
<head>
    <title>Kitnet Pequena | Laur's Kitnets USP</title>
    <meta name="description" content="Kitnet Pequena para alugar no Butantã">
</head>
    <div class="ghost-element">
    </div>
    <style> 
        #espacamento{
            padding: 0px;
        }
    </style>
    <script src="jquery-3.2.1.min.js"></script>
    <div class="product-page small-11 large-12 columns no-padding small-centered" id="espacamento">
        
        <div class="global-page-container">

            <div class="product-section">
                <div class="product-info small-12 large-5 columns no-padding">
                <?php $kitpequena = array("kitnet-pequena" => array(
                    "contem" => "<li> Cama BOX; </li> 
                                <li> TV 22''; </li>
                                <li> Internet 300mb (cabeada e wi-fi); </li> 
                                <li> Ventilador; </li> 
                                <li> Microondas, geladeira, fogão e armários; </li>
                                <li> Porcelanato. </li> ",

                    "bonus" => "<li> Assinatura Amazon Prime; </li>
                                <li class='text-success'>Valor mais acessível.</li>"

                )); ?>
                    <?php foreach ($kitpequena as $produto) { ?>
                        <h3>Kitnet pequena</h3>
                        <h4>Contém</h4>
                        
                        <?php echo $produto["contem"]; ?>
                        <br>
                   
                    
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

                    <h5 class="text-success"><b>Preço: </b>R$ 1250.00</h5>
                    <a href="https://www.airbnb.com.br/rooms/13560595?preview_for_ml=true&source_impression_id=p3_1606178550_d%2BBSdXyLwmrdnG2e&guests=1&adults=1" 
                        target="blank"><button id="btnairbnb">Rerservar via Airbnb!</button>
                    </a>
                    <?php include 'botao-indisponibilidade.php'?>
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
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-1.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-2.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-3.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-7.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-9.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-10.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-12.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-15.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-6.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-8.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-11.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/quinto-andar/kitnet-butanta-pequena-14.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>

                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-porta.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-cozinha.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-armario.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-cama.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-cozinha2.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-cozinha2.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-entrada.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-tv.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-microondas.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-banheiro.jpg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                </div>
                <script>
                    $("img").attr("a");
                </script>

            </div>

            <?php include 'voltarMenu.php'; ?>

        </div>
        
    </div>
        
    <?php include 'footer.php'; ?>

</body>

</html>