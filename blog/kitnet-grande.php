<?php include 'header-kitgrande.php'; ?>
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
                                <li>Microondas, geladeira, fogão e armários.</li>
                                <li>Smart TV 32'';</li>",

                    "home office" => "<li>Internet fibra ótica cabeada e wi-fi, com 300mb e ping baixo;</li>
                                      <li>Cadeira executiva;</li>
                                      <li>Netflix;</li>
                                      <li>Amazon Prime.</li>
                                      </br>",
                    
                    "diferenciais" => "<li>Sofá.</li>"

                )); ?>
                    
                    <?php foreach ($kitgrande as $produto) { ?>
                        <h3>Kitnet Grande</h3>
                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>
                        </br>
                        <h4>Home Office</h4>
                        <?php echo $produto["home office"]; ?>
                        <h4>Diferenciais</h4>
                        <?php echo $produto["diferenciais"]; ?>
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

                    <h5 class="text-success"><b>Preço: </b>R$ 1490.00</h5>
                    <?php include 'facebook_like.php'; ?>
                    <a href="https://airbnb.com/h/kitnet-grande" target="blank"><button id="btnairbnb">Rerservar via Airbnb!</button></a> 
                    <?php include "botao-indisponibilidade.php"; ?>

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
                    <iframe class="product-picture small-12 large-7 columns no-padding"
                        width="460" 
                        height="315" 
                        src="https://www.youtube.com/embed/iRZgvK8f1iE" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                        id="iframe">
                    </iframe>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-1.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-2.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-3.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-4.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-5.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-6.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-7.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-8.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-9.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-10.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-11.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-12.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-13.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>

                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-escritorio.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-escritorio2.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-cozinha.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-escritorio3.jpg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                </div>

            </div>

            <?php include 'voltarMenu.php'; ?>
            
        </div>
    </div>
        
    <?php include 'footer.php'; ?>

</body>

</html>

<style>
    #iframe{
        padding-bottom: 6mm;
    }
</style>