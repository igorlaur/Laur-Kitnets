<?php include 'header.php'; ?>
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
    <div class="about-us small-11 large-12 columns no-padding small-centered" id="about-us">
        <div class="global-page-container">
            <div id="about-us-text" class="about-us-title small-12 columns no-padding">
                <h1>Pretende construir kitnets? Prestamos consultoria!</h1>
                <hr>
            </div>
        
            <img src="img/logo/laurKitnets.png" alt="Fachada de laur's kitnets" title="Logo de Laur's Kitnets: Aluguel de kitnets">
            <div class="about-us-text">
                <p>
                    Kitnets são um excelente meio de renda passiva para que você possa investir. Saiba como:
                </p>
                
                <h2>
                    Sobre a consultoria
                </h2>
                <img src="blog/img/kitnet.jpg" alt="O que é uma kitnet" title="Foto de Kitnet">
                <p id="referencia">
                    Fonte da imagem: <a href="https://www.archdaily.com.br/br/office/garoa?ad_name=project-specs&ad_medium=single">Archdaily</a>
                    Projeto: <a href="https://www.archdaily.com.br/br/office/garoa?ad_name=project-specs&ad_medium=single">Garoa</a>
                </p>
                <div
                    class="fb-like"
                    data-share="true"
                    data-width="350"
                    data-show-faces="true">
                </div>
                </br> </br>
                <p> 
                    O nome já explica o conceito, onde Kitnet vem da junção das palavras Kitchen (cozinha, em inglês) com dinette
                    (sala de jantar pequena),  que significa “pequena cozinha”. 
                </p>
                <p>
                    Esse quadro vem se transformando em razão das inovações e também das adequações, além da padronização da qualidade 
                    definida pelas construtoras que buscam atender as demandas de mercado.
                </p>
                <p>
                    Esse tipo de construção também teve origem nos EUA, que são pequenos apartamentos com uma área de até 50m², e 
                    chegou no Brasil durante a década de 40 concentrado nos centros urbanos. A grande maioria das kitnets são menos valorizadas, pois seus prédios são mais básicos e não possuem muito luxo.
                </p>
                <p id="bold">
                    Público: 
                </p>
                <p>    
                    Ideal para quem mora sozinho, busca um ótimo custo benefício e tem um estilo de vida dinâmico. Também 
                    geralmente são pessoas que trabalham de home office ou até mesmo estudantes de uma determinada universidade regional.
                </p>
                <p id="bold">
                    Tamanho: 
                </p>
                <p>    
                    Até 50 metros quadrados.
                </p>
                <p id="bold">
                    Características: 
                </p>
                <ul>
                    <li>Apenas um cômodo integrando quarto e cozinha ou as vezes até mesmo a sala, além do banheiro.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>