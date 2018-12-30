<?php 
    switch($ambiente):
        case 'root':
            $servidor = "localhost";
            $usuario  = "root";
            $senha    = "root";
            $banco    = "andes";
            $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
        break;
        case 'u431676248_root'
            $servidor = "localhost";
            $usuario  = "u431676248_root";
            $senha    = "polaco929";
            $banco    = "u431676248_andes";
            $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
        break;
    
        
    endswitch;
    if (mysqli_connect_errno()) {// erro e no de numero
        die("Conexão falhou: " + mysqli_connect_errno()); // Se deu erro vou mandar matar a conexão
    }


?>