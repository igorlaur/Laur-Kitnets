<?php include 'header.php'; ?>
<?php include 'icones-contato.php'; ?>
<html class="no-js" lang="pt-br">
<head>
    <title>Kitnet Média | Laur's Kitnets USP</title>
    <meta name="description" content="Kitnet Média para alugar no Butantã">
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
                <?php $kitmedia = array("kitnet-media" => array(
                    "contem" => "<li>Cama BOX;</li>
                                <li> Assinatura Amazon Prime; </li>
                                <li>Microondas, geladeira, fogão e armários.</li>
                                <li>Ventilador;</li>
                                <li>Internet fibra ótica 300mb (cabeada e wi-fi); </br> </br>",
                    "bonus" => "<li> Netflix </li>
                                <li> Assinatura Amazon Prime; </li> 
                                <li> Cadeira executiva </li>
                                <li>Porcelanato;</li> 
                                <li>Smart TV 32'';</li>  
                                <li>Janela para rua;</li> </br> 
                                ",
                    "home office" => "<li>MESA com espaço para notebook e mais um monitor;</li>
                                      <li>CADEIRA EXECUTIVA para melhor conforto;</li>
                                      <li>Internet fibra ótica de 300mb cabeada e wi-fi (com ping baixo).</li> 
                                    "
                )); ?>
                    <?php foreach ($kitmedia as $produto) { ?>
                        
                        <h3>Kitnet Média</h3>

                        <h4>Contém</h4>
                        <?php echo $produto["contem"]; ?>

                        <h4>Bônus</h4>
                        <?php echo $produto["bonus"]; ?>

                        <h4>Home Office</h4>
                        <?php echo $produto["home office"]; ?>

                    <?php 
                } ?>
                    
                    <br>
                    <h5 class="text-success"><b>Preço: </b>R$ 1400.00</h5>
                    </br>
                    <?php include 'botao-disponibilidade.php'; ?>
                    </br></br>
                    <?php include 'botao_quinto-andar.php'; ?>

                </div>
                

                <div class="product-picture small-12 large-7 columns no-padding">
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media1.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media2.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media3.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media4.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media5.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media6.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media7.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media8.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media9.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media10.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media11.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                    <img src="img/kitnet/kitnet-media/quinto_andar/kitnet-butanta-media12.jpeg" alt="Kitnet no butantã próximo ao Metrô / USP" title="Foto da Kitnet no butantã próximo ao Metrô / USP"> <br> <br>
                </div>

            </div>

            <?php include 'voltarMenu.php'; ?>

        </div>
    </div>
        
    <?php include 'footer.php'; ?>

</body>

</html>