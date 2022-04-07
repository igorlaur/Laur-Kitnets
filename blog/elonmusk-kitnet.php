<?php include 'header-elonmusk.php'; ?>
<?php include 'icones-contato.php'; ?>
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
    <article>
        <div class="about-us small-11 large-12 columns no-padding small-centered" id="about-us">
            <div class="global-page-container">
                <div id="about-us-text" class="about-us-title small-12 columns no-padding">
                    <h1>Kitnet do Elon Musk</h1>
                    <hr>
                </div>                
                <div class="about-us-text">                        
                    <h2>
                        Você sabia? Elon Musk vive em uma kitnet de 36m²
                    </h2>
                    <img src="img/blog/elonmusk-kitnet/elon-musk.jpg" alt="Você sabia? Elon Musk vive em uma kitnet de 36m" title="Fotos do Elon Musk">
                    <p id="referencia">
                        Fonte da imagem: <a href="https://www.instagram.com/elonrmuskk/">Instagram</a>
                    </p>
                    <div
                        class="fb-like"
                        data-share="true"
                        data-width="350"
                        data-show-faces="true">
                    </div>
                    </br> </br>
                    <p> 
                        Elon Musk: um dos 10 homens mais ricos do mundo vive em uma kitnet de 36m².
                    </p>
                    <p>
                        Através do Twitter Elon Musk revelou que está vivendo em uma kitnet de apenas US$ 50 Mil no Texas, 
                        onde está localizado a companhia de foguetes espaciais SpaceX. Musk também é conhecido por ser o fundador 
                        da Tesla (montadora de carros mais valiosa do mundo).
                    </p>
                    <p>
                        Segundo o site especializado Teslarati, trata-se de uma casa modular de baixo custo de 35 metros quadrados 
                        fabricada pela empresa americana Boxabl. O modelo Casita, disponível no site da empresa, custa US $ 49,5 milhões 
                        e inclui cozinha, banheiro, sala e quarto. Uma das diferenças é que a casa pode ser montada em menos de um dia 
                        porque é pré-fabricada e pode ser transportada como uma caixa grande – até mesmo por um Tesla.
                    </p>
                    <p>
                        Musk também negou que vive no modelo de casa Boxabl, mas admitiu que mora em um tipo semelhante. Em novembro do ano 
                        passado, a empresa informou que estava entregando uma Casita para um "cliente supersecreto", sem fornecer mais detalhes.
                    </p>
                    <div class="product-picture small-12 large-7 columns no-padding">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr">.
                                <a href="https://twitter.com/elonmusk?ref_src=twsrc%5Etfw">
                                    @elonmusk
                                </a> 
                                may be one of the richest people in the world but he lives in a $50k dollar house that he rents from 
                                <a href="https://twitter.com/SpaceX?ref_src=twsrc%5Etfw">
                                    @SpaceX
                                </a> like this one. 
                                <a href="https://t.co/dRMbga07QZ">
                                    pic.twitter.com/dRMbga07QZ</a>
                            </p>
                            &mdash; Tesla Owners Silicon Valley (@teslaownersSV) 
                                <a href="https://twitter.com/teslaownersSV/status/1410462284439113728?ref_src=twsrc%5Etfw">
                                    July 1, 2021
                                </a>
                        </blockquote> 
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <h3>Por que Elon Musk está vendendo seus ativos?</h3>
                    <p>
                        Elon Musk está vendendo todos os seus ativos, avaliados em US$ 39.9 milhões, desde o ano passado. Segundo o CEO, o foco é 
                        fornecer energia sustentável por meio da Tesla e possibilitar a vida interplanetária com a SpaceX.
                    </p>
                    <h3> Viver em kitnet é o futuro da humanidade?</h3>
                    <p>
                        Além da devida falta de espaço em muitas metrópoles, a Boxabl pretende construir modelos que possam ser transportados 
                        e facilmente instalados em Marte, um dos destinos alvo de Musk. Desta forma facilitando a missão da vida humana em Marte.
                    </p>  
                    <iframe 
                        width="380" 
                        height="315" 
                        src="https://www.youtube.com/embed/qVV6CyGJgZo" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <div
                        class="fb-like"
                        data-share="true"
                        data-width="350"
                        data-show-faces="true">
                    </div>
                    </br> </br>
                    <h4>A melhor kitnet do Butantã é em Laur's Kitnets</h4>
                    <p>Conheça nosso instagram:</p>
                    <?php include 'instagram.php'; ?>
                </div>
            </div>
        </div>
        <div id="kitnet">
            <?php include 'carrossel.php'; ?>
        </div>
    </article>
</body>
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
<?php include 'footer.php'; ?>