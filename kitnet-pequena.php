<?php include 'header.php'; ?>
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
                                <li> Internet 120mb; </li> 
                                <li> Ventilador; </li> 
                                <li> Microondas, geladeira, fogão e armários; </li>
                                <li> Porcelanato. </li> ",

                    "bonus" => "<li class='text-success'>Valor mais acessível.</li>"

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
                    <h5 class="text-success"><b>Preço: </b>R$ 1250.00</h5>
                    <?php include 'botao-disponibilidade.php'?>
                </div>

                <div class="product-picture small-12 large-7 columns no-padding">
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