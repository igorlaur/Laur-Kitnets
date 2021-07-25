<?php include 'header-blog.php'; ?>
<?php include 'logica/aluguel.php'; ?>

<div class="cardapio small-11 large-12 columns no-padding small-centered">
        <div class="global-page-container">
            <div class="cardapio-title small-12 columns no-padding">
            <h3>Nossas Kitnets</h3>
            <hr>
            </div>
        </div>

        <div class="global-page-container">


            <div class="slider-cardapio">
                <div class="slider-002 small-12 small-centered columns">

                <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns" id="kitnetluxo"> 
                        <div class="cardapio-item">
                            <a href="kitnet-luxo.php" title="Kitnet Luxo">
                                
                                <div class="cardapio-item-image">
                                    <img src="img/kitnet/kitnet-luxo/kitnet-butanta-luxo.jpg" alt="Kitnet no Butantã USP"/>   
                                </div>

                                <div class="item-info">
                                    
                                  
                                <div class="title" ><img src="img/social-icons/airbnb.png" width="125">
                                Studio (indisponível) </div>
                                </div>
                                
                                <div class="gradient-filter">
                                </div>
                                
                            </a>
                        </div>
                    </div>
                    

                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns" id="kitnetgrande"> 
                        <div class="cardapio-item">
                            <a href="kitnet-grande.php" title="Kitnet Grande">
                                
                                <div class="cardapio-item-image">
                                    <img src="img/kitnet/kitnet-grande/kitnet-butanta-grande-tv.jpeg" alt="Kitnet grande no Butantã USP"/>   
                                </div>

                                <div class="item-info">
                                
                                    <div class="title"> <img src="img/social-icons/airbnb.png" width="125">
                                    Kitnet Grande <?php echo $indisponivel; ?></div>
                                    </div>

                                <div class="gradient-filter">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns" id="kitnetmedia"> 
                        <div class="cardapio-item">
                            <a href="kitnet-media.php" title="Kitnet Média">
                                
                                <div class="cardapio-item-image">
                                    <img src="img/kitnet/kitnet-media/kitnet-butanta-media.jpeg" alt="Kitnet no Butantã USP"/>   
                                </div>

                                <div class="item-info">
                                    
                                
                                    <div class="title">Kitnet Média </div>
                                </div>

                                <div class="gradient-filter">
                                </div>
                                
                            </a>
                        </div>
                    </div>


                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns" id="kitnetpequena"> 
                        <div class="cardapio-item">
                            <a href="kitnet-pequena.php" title="Kitnet Pequena">
                                
                                <div class="cardapio-item-image">
                                    <img src="img/kitnet/kitnet-pequena/kitnet-butanta-pequena-porta.jpg" alt="Kitnet no Butantã USP"/>   
                                </div>

                                <div class="item-info">
                                    
                                
                                    <div class="title"> <img src="img/social-icons/airbnb.png" width="125"> 
                                    Kitnet Pequena (disponibilidade em 04/01)
                                    </div>
                                </div>

                                <div class="gradient-filter">
                                </div>
                                
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <style>
        #kitnetpequena div{
            color: rgb(43, 255, 0);      /* Verde */
            /* color: rgb(254, 137, 0);        /* Laranja */
            /* color: #ff0000;                   /* Vermelho */
            /* color: #ffb329;            /* Laranja */ 
        }
        #kitnetmedia div{
            /* color: rgb(43, 255, 0); */    /* Verde */
            /* color: rgb(254, 137, 0);    /* Laranja */
            color: #ff0000;                 /* Vermelho */
            /* color: #ffb329; */           /* Laranja */ 
        }
        #kitnetgrande div{
            /* color: rgb(43, 255, 0);    /* Verde */
            color: rgb(254, 137, 0);   /* Laranja */
            /* color: #ff0000;                /* Vermelho */
            /* color: #ffb329; */           /* Laranja */ 
        }
        #kitnetluxo div{
            /* color: rgb(43, 255, 0);    /* Verde */
            /* color: rgb(254, 137, 0);   /* Laranja */
            color: #ff0000;                 /* Vermelho */
            /* color: #ffb329; */           /* Laranja */ 
        }
    </style>