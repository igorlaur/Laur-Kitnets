<?php include 'header-kitindicacao.php'; ?>
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
                                <li>Fogão por indução ou cooktop;</li> 
                                <li>Frigobar;</li>
                                <li>Armários;</li>",

                    "incluso" => "<li>Água, luz, internet e gás.</li></br>",
                )); ?>
                    
                    <?php foreach ($kitgrande as $produto) { ?>
                        <h3>Kitnet Grande</h3>
                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>
                        </br>
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

                    <h5 class="text-success"><b>Preço: </b>R$ 1150.00</h5>
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
                    <img src="img/kitnet/kitnet-indicacao/kitnet1.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-indicacao/kitnet2.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-indicacao/kitnet3.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-indicacao/kitnet4.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-indicacao/kitnet5.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-indicacao/kitnet6.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-indicacao/kitnet7.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-indicacao/kitnet8.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-indicacao/kitnet9.jpeg" alt="Kitnet grande no butantã próximo ao Metrô / USP" title="Foto da kitnet grande no butantã próximo ao Metrô / USP"> <br> <br>
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