<?php 
    // Passo 1 - Abrir conexão
    $servidor = "localhost";
    $usuario = "u431676248_root"; 
    //$usuario = "root";
    $senha = "polaco929";
    //$senha = "root";
    $banco = "u431676248_andes";
    //$banco = "andes";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    // Passo 2 - Testar conexão
    if (mysqli_connect_errno()) {// erro e no de numero
        die("Conexão falhou: " + mysqli_connect_errno()); // Se deu erro vou mandar matar a conexão
    }

   /* switch($ambiente):
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
    
        if (mysqli_connect_errno()) {// erro e no de numero
            die("Conexão falhou: " + mysqli_connect_errno()); // Se deu erro vou mandar matar a conexão
        }
    endswitch;
    */


?>