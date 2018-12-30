<!doctype html>
<html>
<footer id="footer" class="small-12 columns no-padding">

        <meta name="geo.region" content="BR-SP" />
        <meta name="geo.placename" content="S&atilde;o Paulo" />
        <meta name="geo.position" content="-23.572922;-46.723357" />
        <meta name="ICBM" content="-23.572922, -46.723357" />

        <div class="global-page-container">

            <div class="small-11 small-centered large-12 columns footer-section">

                <div class="follow-us small-5 medium-3 small-offset-1 medium-offset-0 columns">
                    <h4 class="footer-section-title">Siga-nos</h4>
                    <a href="https://www.facebook.com/kitnetcorifeu/?ref=bookmarks" target="blank" title="Facebook"><img src="img/social-icons/facebook.svg" alt="facebook-icon"></a>
                    <a href="https://www.instagram.com/p/BlgxAF7h9Cj/?taken-by=kitnetusp" target="blank" title="Instagram"><img src="img/social-icons/instagram-backup.svg" alt="facebook-icon"></a>
                </div>
                
                <div class="contato small-5 medium-3 small-offset-1 medium-offset-0 columns">
                    <h4 class="footer-section-title">Contato</h4>
                    <p>
                        Av. Corifeu de Azevedo Marques, 929<br>
                        São Paulo/SP<br>
                        <a id="tel" class="horario-aberto" href="tel:11952286097" title="Telefone">
                        T. (11) 95228-6097</a><br>
                        <style>
                            a#tel:hover{
                                color: green; 
                            }
                        </style>
                        laur.kitnet@gmail.com
                    </p>
                </div>
                
                <div class="horario small-5 medium-3 small-offset-1 medium-offset-0 columns">
                    <h4 class="footer-section-title">Horários</h4>
                    
                    <?php

                    $dia_semana = date('w'); // Vai me retornar um dia de 1 a 7 (segunda a domingo)
                    $agora = strtotime('now'); // Retorna a hora exata do computador;
                    $inicio_dia = strtotime('today'); // Me retorna a quantidade de segundos desde o primeiro segundo do dia

                    $hora_atual = $agora - $inicio_dia; // Com isso eu tenho exatamente a quantidade de segundos desde o início do dia de hoje

                    if ($dia_semana >= 1 && $dia_semana <= 6) { // estamos entre segunda e sexta-feira
                        if ($hora_atual >= 32400 && $hora_atual <= 72000) { // 9h * 60min = 540 * 60s = 32.400 segundos
                            $texto_horario = '(Aberto agora)';
                            $classe_horario = 'horario-aberto';
                        } else {
                            $texto_horario = '(Fechado agora)';
                            $classe_horario = 'horario-fechado';
                        }
                    } /*elseif ($dia_semana == 7){
                            $texto_horario = '(Fechado agora)';
                            $classe_horario = 'horario-fechado';
                        }*/
                    ?>
                    <p><span class="<?php echo $classe_horario; ?>"><?php echo $texto_horario; ?></span><br>
                    Seg-Sáb: 09:00 - 20:00<br>
                    Domingo: Fechado</p>
                </div>
                
                <div class="como-chegar small-5 medium-3 small-offset-1 medium-offset-0 columns">
                    <h4 class="footer-section-title">Como chegar</h4>
                    <div id="map"></div>
                </div>
                
                <hr>
                
                <div class="copyright small-12 columns">
                    <?php $ano_atual = date("Y"); ?> <!-- Função Date pega o ano atual -->
                    <?php echo $ano_atual; ?> &copy; Todos os direitos reservados   
                    
                </div>
            </div>
        
        </div>

    </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
        function initMap() {
        var local = {lat: -23.5729224, lng: -46.7233567};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: local,
            styles: 
            [
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                    {
                        "visibility": "off"
                    }
                    ]
                },
                {
                    "featureType": "poi",
                    "stylers": [
                    {
                        "visibility": "off"
                    }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                    {
                        "visibility": "off"
                    }
                    ]
                },
                {
                    "featureType": "transit",
                    "stylers": [
                    {
                        "visibility": "off"
                    }
                    ]
                }
            ]
            
        });
        var marker = new google.maps.Marker({
            position: local,
            map: map
        });
        }
    </script>
    <script 
        async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlo2Bml6zmqP1_xtT3aLybZdWZNP7l8CM&callback=initMap">
    </script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>