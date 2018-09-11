<!DOCTYPE html>
<?php date_default_timezone_set('America/Sao_Paulo'); ?> <!-- Definido fuso horário São Paulo, coloquei
                                                            no header e antes do html significa que qualquer
                                                            página está com o fuso horário definido automaticamente
                                                         -->
<html class="no-js" lang="en">
    <head>
            <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125555309-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125555309-1');
        </script>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laur's Kitnets USP</title>
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/slick.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Permanent+Marker|Raleway:400,700" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="icon" href="img/logo/logo.jpg" type="image/x-icon" />
        <link rel="shortcut icon" href="img/logo/logo.jpg" type="image/x-icon" />
        <script src="js/vendor/modernizr.js"></script>
    </head>
    
    <body>


        <header>
            
            <div class="main-header large-12 columns no-padding">

                <div class="global-page-container">
                
                    <div class="logo small-6 small-offset-3 large-3 large-offset-0 columns no-padding">
                        <a href="index.php" title="home">
                            <div class="table">
                                <div class="table-cell">
                                    <h1>Laur's Kitnets</h1>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="main-menu show-for-large-up large-9 columns text-right">		
                        <div class="table">
                            <div class="table-cell">
                                <ul class="menu-items">
                                    <li></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white" wm-link="index.php" id="navbarDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Nossas Kitnets
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" wm-link="kitnet-luxo.php" id="disp">Kitnet Luxo</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" wm-link="kitnet-pequena.php" id="indisp">Kitnet Pequena</a>
                                            <a class="dropdown-item" wm-link="kitnet-media.php" id="indisp">Kitnet Média</a>
                                            <a class="dropdown-item" wm-link="kitnet-grande.php" id="indisp">Kitnet Grande</a>
                                        </div>
                                    </li>
                                    <li><a href="index.php#about-us">Sobre</a></li>
                                    <li><a href="imediacoes.php">Imediações</a></li>
                                    <li><a href="reserva.php">Reserva</a></li>
                                    <li><a href="index.php#footer">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hamburguer-icon small-2 columns text-right">
                        <div class="table">
                            <div class="table-cell">
                                <img src="img/menu/hamburguer.svg">
                            </div> 
                        </div>
                    </div>

                    <div class="right-space small-1 columns"></div>

                </div>
            </div>			
                    
            <div class="sliding-header-menu-outer">						
                <div class="sliding-header-menu">
                    
                    <div class="sliding-header-menu-close-button small-12 columns">
                        <div class="table">
                            <div class="table-cell">
                                <img class="close-icon" src="img/menu/close.svg">
                            </div>	
                        </div>	
                    </div>

                    

                    <div class="sliding-header-menu-main-menu small-12 columns">
                        
                        <div class="table">
                            <div class="table-cell">
                                <ul class="sliding-header-menu-li">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-black-50" wm-link="index.php" id="navbarDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Nossas Kitnets
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" wm-link="kitnet-luxo.php" id="disp">Kitnet Luxo</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" wm-link="kitnet-pequena.php" id="indisp">Kitnet Pequena</a>
                                            <a class="dropdown-item" wm-link="kitnet-media.php" id="indisp">Kitnet Média</a>
                                            <a class="dropdown-item" wm-link="kitnet-grande.php" id="indisp">Kitnet Grande</a>
                                        </div>
                                    </li>
                                    <li><a href="index.php#about-us">Sobre</a></li>
                                    <li><a href="imediacoes.php">Imediações</a></li>
                                    <li><a href="reserva.php">Reserva</a></li>
                                    <li><a href="index.php#footer">Contato</a></li>
                                    <a href="https://api.whatsapp.com/send?phone=5511952286097&text=Olá,%20eu%20vim%20através%20do%20Site%20e%20tenho%20dúvida(s)%20referente%20a%20reserva%20de%20kitnet.%20Minha(s)%20dúvida(s)%20é(são): " target=blank><li><img src="img/social-icons/whatsapp.svg" width="25" id="img"> Whatsapp <img src="img/social-icons/whatsapp.svg" width="25" id="img"></li></a>
                                </ul>
                            </div>
                        </div>
                        
                    </div>                           
                </div>
            </div>

        </header>

    <!-- Header Fixo -->
        <div class="ghost-element">
        </div>

        <main class="p-0" wm-link-destino></main>
    <!-- padding 3 -->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navegacao.js"></script>

        <style>
        a:link { 
        text-decoration:none; 
        } 

        #indisp{
            background-color: white;
            color: orange;
        }
        #indisp:hover{
            background-color: red;
            color: white;
        }
        #disp{
            background-color: orange;
            color: white;
        }
        #disp:hover{
            background-color: green;
        }
        #kitnetpequena div{
            color: #fff;
        }
        #kitnetmedia div{
            color: #ff0000;
        }
        #kitnetgrande div{
            color: #ff0000;
        }
        #kitnetluxo div{
            color: rgb(43, 255, 0);
        }
    </style>