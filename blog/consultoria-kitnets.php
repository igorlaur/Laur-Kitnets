<?php include 'header-consultoria.php'; ?>
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
                    <img src="img/blog/consultoria-kitnet/consultoria-kitnet.png" alt="O que é uma kitnet" title="Foto de Kitnet">
                    <p id="referencia">
                        Fonte da imagem: <a href="https://pixabay.com/pt/photos/escrit%C3%B3rio-neg%C3%B3cios-homens-1209640/">Pixabay</a>
                        
                    </p>
                    <div
                        class="fb-like"
                        data-share="true"
                        data-width="350"
                        data-show-faces="true">
                    </div>
                    </br> </br>
                    <p> 
                            Olá, investidor(a)! Temos experiência com construções e compra de imóveis voltadas para aluguel, como kitnets, studios e 
                        repúblicas desde 1984 em São Paulo. Começamos com imóveis na Martinho Prado, Avanhandava e Nestor Prestana (todos nas proximidades da Praça Roosevelt). 
                        Após alguns anos fundamos a Laur's Kitnets, em 2007, no qual atualmente trabalhamos com kitnets na região do Butantã.
                    </p>
                    <p>
                        Conosco você terá uma consultoria especializada em kitnets e studios, nela você verá:
                    </p>
                
                    <ol>
                        <li>A trajetória de Laur's Kitnets;</li>
                        <li>As melhores localizações para investir em São Paulo;</li>
                        <li>Construção & infraestrutura</li>
                            <ul>- Modelos de construção;</ul>
                            <ul>- Adaptação para o home office;</ul>
                            <ul>- Auxílio com infraestrutura de rede com Access Points;</ul>
                        <li>Método de locação;</li>
                            <ul>- O inquilino ideal;</ul>
                            <ul>- Sistema de locação;</ul>
                            <ul>- Regulamento com o decorrer de mais de 35 anos de experiência.</ul>
                        <li>Modos de divulgação;</li>
                            <ul>- Métodos de divulgação;</ul>
                            <ul>- Ferramentas para marketing;</ul>
                            <ul>- Desenvolvimento de materiais para divulgação;</ul>
                            <ul>- Plataformas para divulgação com auxílio de nossos gráficos;</ul>
                        <li>Tecnologia</li>
                            <ul>- Sistema para gestão das kitnets;</ul>
                            <ul>- Site</ul>
                            <ul>- Dashboard (Controle em gráficos e tabelas referente ao pagamento e dados dos inquilinos)</ul> 
                            <ul>- Dashboard (Gráficos de acessos de clientes no site)</ul>
                        <li>Análise de crédito;</li>
                        <li>Qualidade de vida aos inquilinos;</li>
                        <li>Retorno financeiro.</li>
                    </ol>
                    <div style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden; border-radius: 8px; will-change: transform;">
                        <iframe 
                            loading="lazy" 
                            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                            src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAEnxRq9pms&#x2F;view?embed">
                        </iframe>
                    </div>
                    <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAEnxRq9pms&#x2F;view?utm_content=DAEnxRq9pms&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Apresentação Consultoria | Laur's Kitnets</a> de Igor Laur
                </div>
            </div>
            <?php include "botao-consultoria.php"; ?>
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