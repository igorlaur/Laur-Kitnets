<!DOCTYPE html>
<?php date_default_timezone_set('America/Sao_Paulo'); ?> <!-- Definido fuso horário São Paulo, coloquei
                                                            no header e antes do html significa que qualquer
                                                            página está com o fuso horário definido automaticamente
                                                         -->
<html class="no-js" lang="pt-br">
    <head>
        <!-- Meta -->
        <meta name="author"     content="Igor Laur">    <!-- Qual é o autor desta página? -->
            <!-- Google -->
        <meta name="google-site-verification" content="Zz_P93Oqu49C3Q7ey9q9g_nP6xBwik5xbRd4MPmF9lc" /> <!-- Verificação de propriedade Google Search -->
        <meta name="google-site-verification" content="UMk43ZVIFsv1vsH-M8ObZRQiQC5m4da6l-zLf1CzIYI" /> <!-- Verificação G-Suíte -->
            <!-- Bing-->
        <meta name="msvalidate.01" content="F74D69D71B1D418C4A775B725E43A88F" />
        <meta name="generator"  content="VSCode">       <!-- Qual software que criou/gerou esta página? -->
        <meta name="Keywords"   content="Kitnets executiva para alugar no Butantã, Kitnet mobiliada, kitnet usp, kitnets usp
        kitnet próximo ao metro, kitnet sp, kitnet butanta, kitnet no butantã, kitnet proximo a usp, kitnet perto da usp,
        alugar kitnet proximo ao metro, kit net, studio butanta, studio no butanta, quitinete butanta, kitnet luxo butanta, 
        kitnet sp zona oeste, aluguel kitnet butanta usp, aluguel kitnet usp, morar usp, laur, laur kitnets"> 
        <meta name="application-name" content="Laur's Kitnets Corifeu USP">
        <meta property="og:image" content="https://laur.com.br/blog/consultoria/consultoria-kitnets-og.png">
        <meta property="og:title" content="Está a procura de kitnet? Temos o local ideal! | Laur's Kitnets">
        <meta property="og:description" content="Estamos desde 2007 no Butantã. Vamos ajudar você conseguir o local ideal para viver!">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://laur.com.br/kitnet-media.php">

        <script>

        </script>
        
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
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/slick.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@569;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <?php include 'shortcut.html'; ?>
        <script src="js/vendor/modernizr.js"></script>

            <!-- Hotjar Tracking Code for https://laur.com.br -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:2231364,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
    </head>
    
    <body>
        <?php include 'facebook_sdk.php'; ?>

        <header>
            
            <div class="main-header large-12 columns no-padding">

                <div class="global-page-container">
                
                    <div class="logo small-6 small-offset-3 large-3 large-offset-0 columns no-padding">
                        <a href="index.php" title="home">
                            <div class="table">
                                <div class="table-cell">
                                    <h1 id="kitnet">Laur's Kitnets USP</h1>
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
                                        <a class="nav-link dropdown-toggle" wm-link="index.php" id="navbarDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Nossas Kitnets
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" wm-link="kitnet-luxo.php" id="indisp">Studio</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" wm-link="kitnet-grande.php" id="indisp">Kitnet Grande</a>
                                            <a class="dropdown-item" wm-link="kitnet-media.php" id="indisp">Kitnet Média</a>
                                            <a class="dropdown-item" wm-link="kitnet-pequena.php" id="indisp">Kitnet Pequena</a>
                                        </div>
                                    </li>
                                    <li><a href="index.php#about-us" id="sobre">Sobre</a></li>
                                    <li><a href="imediacoes.php" id="button">Imediações</a></li>
                                    <li><a href="reserva.php" id="button">Reserva</a></li>
                                    <li><a href="index.php#footer" id="contato">Contato</a></li>
                                    <li><a href="https://blog.laur.com.br" id="button">Blog</a></li>
                                    <li><a href="sistema/login/login.php" id="button">|&nbsp;&nbsp;&nbsp;&nbsp; Login</a>
                                   <!-- <li><a href="login/login.php" id="button">|&nbsp;&nbsp;&nbsp;&nbsp; Login</a> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script src="jquery-3.2.1.min.js"></script>
                    <script>
        $(function () {
            $('li #sobre').click(function (e) {
				$('html, body').animate({ scrollTop: $('#about-us').offset().top}, 1000); // Adaptando ao heigh
            });
            $('li #contato').click(function (e) {
                $('html, body').animate({ scrollTop: $('#footer').offset().top}, 1000);
            });
            $('#home').click(function (e) {
                $('html, body').animate({ scrollToP: $('#home').offset().top}, 1000);
            });
        });

    </script>
                    
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

                    
                <!-- Mobile -->
                    <div class="sliding-header-menu-main-menu small-12 columns">
                        
                        <div class="table">
                            <div class="table-cell">
                                <ul class="sliding-header-menu-li">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-black-50" wm-link="index.php" id="navbarDropdownBlue" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Nossas Kitnets
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" wm-link="kitnet-luxo.php" id="indisp">Studio</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" wm-link="kitnet-grande.php" id="indisp">Kitnet Grande</a>
                                            <a class="dropdown-item" wm-link="kitnet-media.php" id="indisp">Kitnet Média</a>
                                            <a class="dropdown-item" wm-link="kitnet-pequena.php" id="indisp">Kitnet Pequena</a>
                                        </div>
                                    </li>
                                    <li><a href="index.php#about-us" id="sobre">Sobre</a></li>
                                    <li><a href="imediacoes.php">Imediações</a></li>
                                    <li><a href="reserva.php">Reserva</a></li>
                                    <li><a href="https://blog.laur.com.br">Blog</a></li>
                                    <li><a href="index.php#footer" id="contato">Contato</a></li>
                                    <a href="https://api.whatsapp.com/send?phone=5511966306867&text=Olá,%20eu%20vim%20através%20do%20Site%20e%20tenho%20dúvida(s)%20referente%20a%20reserva%20de%20kitnet.%20Minha(s)%20dúvida(s)%20é(são): " target=blank><li><img src="img/social-icons/whatsapp.svg" width="25" id="img"> Whatsapp <img src="img/social-icons/whatsapp.svg" width="25" id="img"></li></a>
                                    <li><a class="clear button" href="sistema/login/login.php" id="login">Login/Entrar</a>
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
    <!-- End Header Fixo -->

    <!-- padding 3 -->
    <script src="jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navegacao.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c295aaf7a79fc1bddf2bb48/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    

        <style>
        a:link { 
        text-decoration:none; 
        } 

        a#button{
            color: white;
        }
        a#navbarDropdown{
            color: white;
        }
        a#navbarDropdown:hover{
            color: #4394ff;
            transition-duration: 0.5s;
        }
        a#navbarDropdownBlue{
            color: #4394ff;
        }
        a#navbarDropdownBlue:hover{
            color: black;
        }
        a#button:hover{
            color: #4394ff;
            transition-duration: 0.3s;
        }

        a#contato:hover{
            color: #4394ff;
            transition-duration: 0.3s;
        }
        a#sobre:hover{
            color: #4394ff;
            transition-duration: 0.3s;
        }

        #indisp{
            background-color: white;
            color: #4394ff;
        }
        #indisp:hover{
            background-color: red;
            color: white;
            transition-duration: 0.3s;
        }
        #disp{
            background-color: black;
            color: #4394ff;
        }
        #disp:hover{
            background-color: green;
            transition-duration: 1s;
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


        h1#kitnet{
            color: #4394ff;
        }
        header{
            background-color: black;
        }
        footer{
            background-color: black;
        }

        #login{
            background-color: black;
            color: white;
        }
        #login:hover{
            color: #4394ff;
        }

        /* BARRA DE ROLAGEM */
            /* Tamanho da Barra */
            ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
            -webkit-border-radius: 16px;
            }

            /* Fundo da Barra de Rolagem, caminho que a barra percorre */
            ::-webkit-scrollbar-track-piece {
            background-color: black;
            -webkit-border-radius: 3px;
            }

            /* Barra / Scroolbar (VERTICAL) */
            ::-webkit-scrollbar-thumb:vertical {
            height: 5px;
            background-color: #1E90FF; /* ed145b */
            -webkit-border-radius: 3px;
            }

            /* Barra / Scroolbar (HORIZONTAL) */
            ::-webkit-scrollbar-thumb:horizontal {
            width: 5px;
            background-color: #1E90FF;
            -webkit-border-radius: 3px;
            }
    </style>