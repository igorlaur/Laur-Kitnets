<!-- Contact icons -->
    <nav id="janela">
		<ul>
			<a href="https://api.whatsapp.com/send?phone=5511966306867&text=Olá,%20eu%20vim%20através%20do%20Site%20e%20tenho%20dúvida(s)%20referente%20a%20reserva%20de%20kitnet.%20Minha(s)%20dúvida(s)%20é(são): " target="blank"><li id="tela1"><img src="img/social-icons/whatsapp.svg"></li></a>
			<a href="https://www.facebook.com/kitnetcorifeu/" target="blank"><li id="tela2"><img src="img/social-icons/messenger.svg"></li></a>
            <a href="https://www.instagram.com/laur.com.br/" target="blank"><li id="tela3"><img src="img/social-icons/instagram.png"></li></a>
            <a href="https://www.google.com.br/maps/place/Laur's+kitnet+Corifeu+USP/@-23.5728577,-46.7256065,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce565b8b6f7b8d:0x10afc06d6515309d!8m2!3d-23.5728626!4d-46.7234124" target="blank"><li id="tela4"><img src="img/social-icons/google-maps.svg"></li></a>
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