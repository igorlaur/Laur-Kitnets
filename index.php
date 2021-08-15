<?php include 'header.php'; ?>
<?php include 'logica/aluguel.php'; ?>

<head>
    <title>Laur's Kitnets USP</title>
    <meta name="description" content="Está a procura de Kitnets executivas para alugar no Butantã? Temos o ideal à você!">
    <meta property="og:image" content="https://laur.com.br/img/logo/laurKitnets.png">
</head>

    <body>
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
    <nav id="janela">
		<ul>
			<a href="https://api.whatsapp.com/send?phone=5511966306867&text=Olá,%20eu%20vim%20através%20do%20Site%20e%20tenho%20dúvida(s)%20referente%20a%20reserva%20de%20kitnet.%20Minha(s)%20dúvida(s)%20é(são): " target="blank"><li id="tela1"><img src="img/social-icons/whatsapp.svg" alt="Whatsapp"></li></a>
			<a href="https://www.facebook.com/kitnetcorifeu/" target="blank"><li id="tela2"><img src="img/social-icons/messenger.svg" alt="Messenger"></li></a>
            <a href="https://www.instagram.com/laur.com.br/" target="blank"><li id="tela3"><img src="img/social-icons/instagram.png" alt="Instagram"></li></a>
            <a href="https://www.google.com.br/maps/place/Laur's+kitnet+Corifeu+USP/@-23.5728577,-46.7256065,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce565b8b6f7b8d:0x10afc06d6515309d!8m2!3d-23.5728626!4d-46.7234124" target="blank"><li id="tela4"><img src="img/social-icons/google-maps.svg" alt="Google maps"></li></a>
        </ul>
    </nav>
    <!-- Mostrar e Fechar as redes sociais --> 
    <!-- <input type="button" id="reverso" value="Reverso" /> -->  
    </body>
	<div id="primeira"></div>
    <div id="segunda"></div>
    <div id="terceira"></div>
    <div id="quarta"></div>
    <div id="quinta"></div>
    <script>
        $(function(e){
            $('#reverso').click(reverterObjeto)
        })
        function reverterObjeto(){
            $('#janela').toggle(300);
        }
    </script>
    <style>
        nav {
			position: fixed;
			width: 0px;     /* 50 */
			padding: 0px;   /* 1 */
			top: 95px;
			left: 10px;
			box-shadow: 0 0 5px #000;
			background-color: #000;
			z-index: 3;
		}

		nav ul {
			margin: 0;
			padding: 0;
			list-style: none
		}

		nav li {
			list-style-type: none;
			width: 30px;
			height: 30px;
			background-repeat: no-repeat;
			margin-bottom: 1px;
			cursor: pointer;
		}

		nav li:first-child {
			
		}

		nav #tela2 li:nth-child(2) {
			background-image: url(imagem/basquete.png)
		}
    </style>
    <div class="welcome-gallery small-12 columns">
        <div class="photo-section small-12 columns">
            <img class="homepage-main-photo" src="img/kitnet/marketing/kitnet-butanta.png" alt="Kitnet no Butantã USP">
        </div>

        <div class="main-section-title small-10 columns">
            <div class="table">
                <div class="table-cell">
                    <h1>Bem vindo ao Laur's Kitnets USP</h1>
                    <h2>A procura de um lar? Temos o ideal para você!</h2>
                </div>
            </div>
        </div>

        <div class="photo-gradient">
            
        </div>
    </div>

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
                                        Studio <?php echo $indisponivel; ?> 
                                    </div>
                                    <div
                                        class="fb-like"
                                        data-share="true"
                                        data-width="450"
                                        data-show-faces="true">
                                    </div>
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
                                    <img src="img/kitnet/kitnet-grande/quinto-andar/kitnet-butanta-grande-1.jpg" alt="Kitnet grande no Butantã USP"/>   
                                </div>
                                <div class="item-info">
                                    <div class="title"> <img src="img/social-icons/airbnb.png" width="125">
                                    Kitnet Grande (reservado recentemente) </div>
                                        <div
                                            class="fb-like"
                                            data-share="true"
                                            data-width="450"
                                            data-show-faces="true">
                                        </div>
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
                                    <div class="title">Kitnet Média <?php echo $indisponivel; ?></div>
                                    <div
                                        class="fb-like"
                                        data-share="true"
                                        data-width="450"
                                        data-show-faces="true">
                                    </div>
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
                                        Kitnet Pequena <?php echo $indisponivel; ?>
                                    </div>
                                    <div
                                        class="fb-like"
                                        data-share="true"
                                        data-width="450"
                                        data-show-faces="true">
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
    <div class="cardapio small-11 large-12 columns no-padding small-centered">
        <div class="global-page-container">
            <div class="cardapio-title small-12 columns no-padding">
                <h3><a href="https://blog.laur.com.br">Conheça nosso blog </a></h3>
                <hr>
            </div>
        </div>
        <div class="global-page-container">
            <div class="slider-cardapio">
                <div class="slider-002 small-12 small-centered columns">
                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns" id="blog"> 
                        <div class="cardapio-item">
                            <a href="https://blog.laur.com.br/home-office.php" title="Home office">  
                            <div class="cardapio-item-image">
                                <img src="blog/home-office/kitnet-home-office.png" alt="Como nos adaptamos ao home office? | Laur Kitnets"/>   
                            </div>
                            <div class="item-info">
                                <div class="title"> <img src="img/logo/laurkitnet.png" width="125">
                                    <p>Veja como adaptamos nossas kitnets para o Home Office e a qualidade de vida aos moradores.</p>
                                </div>
                            </div>
                                <div class="gradient-filter">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns" id="blog"> 
                        <div class="cardapio-item">
                            <a href="https://blog.laur.com.br/qual-a-diferenca-entre-kitnets-studio-jk-loft-flat-republica-e-apartamento.php" title="Você sabe qual a diferença entre Kitnet, Studio, Loft, Flat, JK, republica e co-living?">
                                <div class="cardapio-item-image">
                                    <img src="blog/img/flat-c.jpg" alt="Qual a diferença entre kitnets, studios, coliving e derivados"/>   
                                </div>
                                <div class="item-info">     
                                    <div class="title" ><img src="img/logo/laurkitnet.png" width="125" alt="Logo">
                                    <p>Qual a diferença entre kitnets, studios, jk, loft, flat, republica e apartamento?</p>
                                    </div> 
                                </div>
                                <div class="gradient-filter">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns" id="blog"> 
                        <div class="cardapio-item">
                            <a href="https://blog.laur.com.br/consultoria-kitnets.php" title="">
                                <div class="cardapio-item-image">
                                    <img src="blog/consultoria/consultoria-kitnets.jpg" alt="Pretende construir kitnets? Também prestamos consultoria!"/>   
                                </div>
                                <div class="item-info">     
                                    <div class="title" ><img src="img/logo/laurkitnet.png" width="125">
                                    <p>Pretende construir kitnets? Também prestamos consultoria!</p>
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
    <div class="about-us small-11 large-12 columns no-padding small-centered" id="seguranca-us">
        <div class="global-page-container">
            <div id="seguranca" class="about-us-title small-12 columns no-padding">
                <h3>Segurança</h3>
                <hr>
            </div>
            <img src="img/seguranca/camera.jpg" alt="Segurança">
            <div class="about-us-text">
                <p>
                        São utilizado câmeras em áreas externas com reconhecimento facial, laser
                    noturno e armazenamento de vídeos em nuvem para total conforto e segurança 
                    dos moradores.
                </p>
            </div>
        </div>
        <div class="about-us small-11 large-12 columns no-padding small-centered" id="seguranca-us">
            <div class="global-page-container">
                <div id="seguranca" class="about-us-title small-12 columns no-padding">
                <!-- <h3>Segurança</h3> -->
                </div>
            <img src="img/seguranca/extintor.jpg" alt="Segurança">
            <div class="about-us-text">
                <p>
                    Para uma maior segurança também disponibilizamos exintor de incêndio.
                    O extintor é de Classe A, B, C e D, podendo apagar qualquer incêndio.
                </p>
            </div>
        </div>
        <div class="about-us small-11 large-12 columns no-padding small-centered" id="seguranca-us">
            <div class="global-page-container">
                <div id="seguranca" class="about-us-title small-12 columns no-padding">
                    <!-- <h3>Segurança</h3> -->
                </div>
            <img src="img/seguranca/kitnet-butanta-delegacia.jpg" alt="Segurança">
                <div class="about-us-text">
                    <p>
                        Delegacia 51º DP há 180 metros.
                    </p>
                </div>
            </div>
        </div>
        <div class="global-page-container">
            <div id="seguranca" class="about-us-title small-12 columns no-padding">
                <!-- <h3>Segurança</h3> -->
            </div>
            <img src="img/seguranca/kitnet-butanta-guardacivil.png" alt="Segurança">
                <div class="about-us-text">
                    <p>
                        Guarda civil metropolitana há 500 metros.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us small-11 large-12 columns no-padding small-centered" id="about-us">
        <div class="global-page-container">
            <div id="about-us-text" class="about-us-title small-12 columns no-padding">
            <h3>Sobre Nós</h3>
            <hr>
            </div>
            <img src="img/logo/laurKitnets.png" alt="Fachada de laur's kitnets">
            <div class="about-us-text">
                <p>
                    Temos experiência com construções e compra de imóveis voltadas para aluguel, como kitnets, studios e 
                    repúblicas desde 1984 em São Paulo. Começamos com imóveis no edifício Copan, Praça Roosvelt e Nestor Pestana. 
                    Após alguns anos fundamos a Laur's Kitnets, em 2007, no qual atualmente trabalhamos com kitnets na região do Butantã.
                    <a href="https://laur.com.br/consultoria-kitnets.php">Também prestamos consultoria para investimento!</a>
                </p>
                <p>
                    Localizado na principal avenida do Butantã, estamos desde 2007 ajudando 
                    excecutivos a encontrarem um lar ideal para viver, com todos os benefícios 
                    que a Corifeu de Azevedo Marques proporciona!
                </p>
                
                <p>
                    Por que nos escolher? Estamos localizado em uma Av. referência comercial, onde 
                    tudo que é necessário se encontra ao redor e a poucos metros!
                </p>

                <p> 
                    Website desenvolvido por <a href="https://www.linkedin.com/in/igor-laur/" target="blank">Igor Laur</a>
                </p>
                
                <iframe 
                    title="Como começamos?"
                    class="product-picture small-12 large-7 columns no-padding"
                    width="460" 
                    height="315" 
                    src="https://www.youtube.com/embed/3TXeqbax7fk" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    <style>
    .card-deck{
        margin: 60px;
    }
    #laranja{
        color: orange;
    }
    #imediacao{
        padding: 0px;
        margin-left: 15px;
    }  
    </style>
    <div class="about-us small-11 large-12 columns no-padding small-centered" id="about-us">
        <div class="global-page-container">
            <div id="about-us-text" class="about-us-title small-12 columns no-padding">
                <?php include 'instagram.php'; ?>
            </div>
        </div>
    </div>
    <div class="cardapio small-12 large-12 medium-12 columns no-padding small-centered" id="imediacoes">
        <div class="global-page-container">
            <div class="cardapio-title small-12 columns no-padding">
            <br> <br>
                <h3 id="imediacao">Imediações</h3>
            <hr>
            </div>
        </div>
        <div class="card-deck">
        <!-- USP col-12 col-sm-6 col-md-4 col-lg-2 col-xl-1-->
        <div class="card">
            <div class="panel-heading">
                <h3 class="panel-title" id="laranja">Universidades</h3>
            </div>
            <img class="card-img-top" src="img/universidades/usp-butanta.jpg" alt="Kitnet próximo a USP, Laur's Kitnets" title="Foto da kitnet próximo a USP">
            <div class="card-body">
                <h5 class="card-title">Universidade de São Paulo (USP)</h5>
                <p class="card-text">A USP é considerada a 2º melhor universidade
                        da América do Sul. A entrada mais próxima está há 1km de Laur's kitnets</p>
            </div>
            <a href="https://bit.ly/2uOwNOL">
                <div class="card-footer">
                    <small class="text-primary">1.0km - Clique aqui e veja a Rota até a USP</small>
                </div>
            </a>
        <!-- São Judas -->
            <img class="card-img-top" src="img/universidades/sao-judas.jpg" alt="Kitnet próximo a Universidade São Judas, Laur's Kitnets">
            <div class="card-body">
            <h5 class="card-title">Universidade São Judas Tadeu (USJT)</h5>
            <p class="card-text">A São Judas é uma instituição com pouco mais de 40 anos
                        de existência e está em processo de consolidação como uma referência no ensino superior brasileiro,
                        jamais obtendo nenhum conceito mínimo em avaliações do MEC ao longo de sua história.</p>
            </div>
            <a href="https://bit.ly/2A8vwXP">
                <div class="card-footer">
                    <small class="text-primary">1.0km - Clique aqui e veja a Rota a São Judas</small>
                </div>
            </a>
            </div>
            
        <!-- TRANSPORTE -->
            <div class="card">
                <div class="panel-heading">
                    <h3 class="panel-title" id="laranja">Transporte</h3>
                </div>
            <!-- Ônibus -->
                <img class="card-img-top" src="img/transporte/onibus-compressed.jpg" alt="Transporte público butantã de Laur's Kitnets">
                    <div class="card-body">
                    <h5 class="card-title">Ônibus</h5>
                    <p class="card-text">São diversos os ônibus que passam em frente o imóvel, caso opte ir
                        de ônibus ao metrô, pode pegar qualquer um que te levará, em no máximo 3 minutos. 
                    </p>
                    <p><a href="onibus.php" title="Transporte público butantã">Ver a tabela de ônibus</a> da região.</p>
                <!-- 
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Centro</th>
                            <th scope="col">Numeração</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>JD Maria Luiza</td>
                            <td>Paulista</td>
                            <td>715M-10</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>JD Maria Luiza</td>
                            <td>Lgo. da Polvora</td>
                            <td>715M-10</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>JD Arpoador</td>
                            <td>Metrô Barra Funda</td>
                            <td>778J-10</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Vila Gomes</td>
                            <td>Paulista</td>
                            <td>809V-10</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>PQ. Continental</td>
                            <td>Metrô Butantã</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Shopping Continental</td>
                            <td>Anhagabaú</td>
                            <td>8705-10</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Vila Dalva</td>
                            <td>Butantã</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Rio Pequeno</td>
                            <td>Butantã</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Rio Pequeno</td>
                            <td>Terminal Pinheiros</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Rio Pequeno</td>
                            <td>Terminal Princesa Isabel</td>
                            <td>8707-10</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Rio Pequeno</td>
                            <td>Itaim Bibi</td>
                            <td>@twitter</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Rio Pequeno</td>
                            <td>Metrô Barra Funda</td>
                            <td>719R-10</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>JD Adalgiza</td>
                            <td>Pinheiros</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                        </table>        
                    -->                             
                
                    </div>
                <a href="https://bit.ly/2uM4b8Y" target="blank">
                    <div class="card-footer">
                        <small class="text-primary">60 metros - Clique para ver a Rota</small>
                    </div>
                </a>
            <!-- Metrô -->
                <img class="card-img-top" src="img/transporte/metro-butanta.jpg" alt="Kitnet próximo ao Metrô Butantã, Laur's Kitnets">
                <div class="card-body">
                    <h5 class="card-title">Metrô Butantã</h5>
                    <p class="card-text">Excelente localização, estamos bem próximo a linha amarela. 
                        Qualquer ônibus que passa em frente o imóvel te levará à estação.
                    </p>
                    <li>3 minutos de ônibus;</li>
                    <li>15 a 20 minutos a pé.</li>
                </div>
                <a href="https://bit.ly/2AhYxkf" target="blank" title="Rota ao metrô butantã">
                    <div class="card-footer">
                        <small class="text-primary">Clique e veja a rota até o Metrô Butantã</small>
                    </div>
                </a>
            </div>

        <!-- Mercados -->
            <div class="card">
                <div class="panel-heading">
                    <h3 class="panel-title" id="laranja">Mercados</h3>
                </div>
            <!-- Sacolão Oba -->
                <img class="card-img-top" src="img/mercados/sacolao-oba2-compressed.jpg" alt="Sacolão Oba, imediações de Laur's Kitnets">
                <div class="card-body">
                    <h5 class="card-title">Sacolão Oba</h5>
                    <p class="card-text">Precisa economizar tempo para preparar sua comida? Fazer sua compra mensal?
                            Nada melhor do que ter excelentes mercados "na porta" do imóvel! </p>
                </div>
                <a href="https://bit.ly/2LORuk2" target="blank" title="Rota ao Sacolão Oba">
                    <div class="card-footer">
                        <small class="text-primary">90 metros - Clique aqui para ver a Rota</small>
                    </div>
                </a>
            <!-- Violeta -->
                <img class="card-img-top" src="img/mercados/supermercado-violeta.jpg" alt="Supermercado Violeta, imediações de Laur's kitnets">
                <div class="card-body">
                    <h5 class="card-title">Supermercado Violeta</h5>
                    <p class="card-text">Precisa economizar tempo para preparar sua comida?
                        Um mercado com valor mais acessível? Apenas 5 minutinhos! 🏃😀  </p>
                </div>
                <a href="https://bit.ly/2NIRnXR" target="blank">
                    <div class="card-footer">
                        <small class="text-primary">500 metros - Clique aqui para ver a Rota até o Violeta</small>
                    </div>
                </a>
            </div>
            <!-- Atraçoes -->
            <div class="card">
                <div class="panel-heading">
                    <h3 class="panel-title" id="laranja">Atrações</h3>
                </div>
                <!-- Vila Butantan -->
                <img class="card-img-top" src="img/atrações/vila-butantan.jpg" alt="Vila Butantan, imediações de Laur's Kitnets">
                <div class="card-body">
                    <h5 class="card-title">Vila Butantan</h5>
                    <p class="card-text">Quer morar em um local com entretenimento próximo a você? Venha para Laur's Kitnets USP.
                        Estamos próximos ao Vila Butantã, um lifestyle center, centro de compras e lazer, que aposta na revitalização
                        da cidade. O empreendimento é formado por contêineres marítimos reciclados. A Vila Butantan oferece gastronomia,
                        lojas com produtos e serviços exclusivos e diversificados, foodtruck e eventos atrativos.
                    </p>
                </div>
                <a href="https://bit.ly/2JSv8wu" target="blank">
                    <div class="card-footer">
                        <small class="text-primary">10 minutos - Clique aqui para ver a Rota</small>
                    </div>
                </a>
                <!-- Kadalora -->
                <img class="card-img-top" src="img/atrações/pizzaria-kadalora-compressed.jpg" alt="Pizzaria Kadalora, imediações de Laur's Kitnets">
                <div class="card-body">
                    <h5 class="card-title">Pizzaria Kadalora</h5>
                    <p class="card-text">
                        Que tal reunir os amigos para comer uma deliciosa pizza na 
                        <a href="https://www.instagram.com/kadalorapizza/" target="blank" title="Rota à pizzaria Kadalora">
                        @kadalorapizza 🍕😋 </a>
                    </p>
                </div>
                <a href="https://bit.ly/2NJdyNE" target="blank">
                    <div class="card-footer">
                        <small class="text-primary">400 metros - Clique aqui para ver a Rota</small>
                    </div>
                </a>
            </div>
        </div>
    </div>           
    <div id="contato" class="contact-us small-11 large-12 columns no-padding small-centered">
        <div class="global-page-container">
            <div class="contact-us-title small-12 columns no-padding">
            <h3><a href="reserva.php" title="Faça sua reserva">Faça seu pré-cadastro já!</a></h3>
            <hr>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <style>
        a:link { 
        text-decoration:none; 
        } 

        #btn{
            color: orange;
        }
        #verde{
            background-color: orange;
            color: white;
        }
        #kitnetpequena div{
            /* color: rgb(43, 255, 0);      /* Verde */
            /* color: rgb(254, 137, 0);        /* Laranja */
            color: #ff0000;                   /* Vermelho */
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
        #airbnb{
            color: blue;
        }
        #blog div{
            color: #00BFFF;
        }
        #bold{
            font-weight: bold;
        }
    </style>
    <script>
		$(function (e) {
			$('div #about-us').click(function (e) { // Quando eu clicar no segundo elemento, chamo o evento click
				$('html, body').animate({ scrollTop: 0 }, 1000); // Evento de animação. 300px, 1000 = 1 segundo
			});

			$('nav li:first-child').click(function (e) {
				$('html, body').animate({ scrollTop: 500 }, 1000);
			});
		});

	</script>
</body>
</html>

