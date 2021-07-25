<?php include 'header.php'; ?>
<head>
    <title>Reserva | Laur's Kitnets USP</title>
</head>
<?php

$produtos = array(
    array(
        'nome' => 'Kitnet Pequena',
        'estoque' => 0
    ),

    array(
        'nome' => 'Kitnet Média',
        'estoque' => 0
    ),

    array(
        'nome' => 'Grande',
        'estoque' => 1
    ),

    array(
        'nome' => 'Kitnet Luxo',
        'estoque' => 0
    )

)

?>


<div id="contact-us" class="contact-us small-11 large-12 columns no-padding small-centered">

<div class="global-page-container">
    <div class="contact-us-title small-12 columns no-padding">
    <h3>Faça a sua Pré-reserva</h3>
    <hr></hr>
    </div>
    

    <select name="kitnet" class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
    <option>Nenhum produto selecionado</option> 
    
    <?php foreach ($produtos as $item) { ?>

    <option <?php if ($item['estoque'] == 0) {
                echo 'disabled';
            } ?> > <!-- Se o estoque for = 0, desabilito. -->
        <?php echo $item['nome']; ?> 
        <?php
        if ($item['estoque'] == 0) {
            echo ' (Produto indisponível)';
        } elseif ($item['estoque'] == 1) {
            echo '(Última unidade em estoque)';
        } else {
            echo '(Em estoque)';
        }
        ?>
    </option> 

    <?php 
} ?>
    
</select>
            

            
    <div class="reservation-form small-12 columns no-padding"> <br> 

        <form action="reserva.php#contact-us" method="post"> <!-- Porque vamos processar o formulário dentro do próprio index.php -->

            <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
        
                <input type="text" name="nome" class="field" placeholder="Nome completo *" required/>
                
                <input type="email" name="email" class="field" placeholder="E-mail *" required/>

                <!--<input type="text" name="profissao" class="field" placeholder="Profissão *" required/>

                <input type="text" name="local_trabalho" class="field" placeholder="Instituição em que trabalha"/>

                <input type="text" name="endereco_comercial" class="field" placeholder="Endereço comercial"/>-->

                <input type="text" name="local_estudo" class="field" placeholder="Instituição em que estuda"/>

                <!--<input type="text" name="estudante_curso" class="field" placeholder="Estudante de"/>

                <input type="date" name="data_nascimento" class="field" placeholder="Data de Nascimento" required/>

                <input type="text" name="endereco_residencial" class="field" placeholder="Endereço residencial *" required/>

                <input type="text" name="nome_conjuge" class="field" placeholder="Nome do(a) cônjuge/companheiro(a)"/>

                <input type="text" name="nome_pai" class="field" placeholder="Nome do Pai *" required/>

                <input type="text" name="nome_mae" class="field" placeholder="Nome da Mãe *" required/>-->

                <textarea type="text" name="mensagem" class="field" placeholder="Mensagem (opcional)"></textarea>


            </div>

            <div class="form-part2 small-12 large-3 xlarge-3 end columns no-padding">
            
                <input type="text" name="telefone" class="field" placeholder="Telefone *" required/>
                
                <input type="datetime-local" name="data" class="field" placeholder="Data e hora da mudança" required/>

                <!--<input type="text" name="cpf" class="field" placeholder="CPF *" required/>

                <input type="text" name="rg" class="field" placeholder="RG *" required/>

                <input type="text" name="local_nascimento" class="field" placeholder="Local de Nascimento *" required/>-->

                <input type="text" name="nacionalidade" class="field" placeholder="Nacionalidade *" required/>  

                <input type="text" name="cidade" class="field" placeholder="Cidade *" required/>

                <input type="text" name="estado" class="field" placeholder="Estado *" required/>

                <!--<input type="text" name="cep" class="field" placeholder="CEP" required/>

                <input type="text" name="telefone_familia" class="field" placeholder="Telefone da família *" required/>-->

                <!-- <input type="text" name="num_pessoas" class="field" placeholder="Número de pessoas" required/>
                -->

                <select name="sexo">
                    <option>Selecione sexo</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                </select> 

                <br> <br>     

                <!--<select name="estado_civil">
                    <option>Estado civil</option>
                    <option>Solteiro(a)</option>
                    <option>Casado(a)</option>
                    <option>Viúvo(a)</option>
                    <option>Divorciado(a)</option>
                </select> -->

                <br> <br> 

                <!--<a href="https://goo.gl/forms/MdEmQxzicCZTwe7q2" target="blank"><p>Envie seu documento</button></p></a>-->
                <style>
                    #btn{
                        background-color: black;
                    }
                    #btn:hover{
                        background-color: rgb(148, 0, 0);
                    }
                </style>

                <input type="submit" name="submit" value="Reservar"/>

            </div>


        </form>

        <?php 

            // Inserir Arquivos do PHPMailer
        require 'phpmailer/Exception.php';
        require 'phpmailer/PHPMailer.php';
        require 'phpmailer/SMTP.php';

            // Usar as classes sem o namespace
        use PHPMailer\PHPMailer\PHPMailer; // Use pode ser usado para trazer aquelas funções p cá sem ter que usar o 'namespace' utilizado no PHPMailer.php
        use PHPMailer\PHPMailer\Exception;

        function clean_input($input)
        { // Prevenção contra ataques a formulário
            $input = trim($input); // Função para limpar
            $input = stripslashes($input);
            $input = htmlspecialchars($input); // Caracteres especiais

            return $input;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // testar se o request method da variavel SuperGlobalServer = post, porque toda página por padrão sempre carrega no modo GET, então se nossa página carregar com método POST saberemos que o nosso formulário foi enviado
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];
            $telefone = $_POST['telefone'];
            $data = $_POST['data']; 
                //$num_pessoas = $_POST['num_pessoas']; 
            //$profissao = $_POST['profissao'];
            //$local_trabalho = $_POST['local_trabalho'];
            //$endereco_comercial = $_POST['endereco_comercial'];
            $local_estudo = $_POST['local_estudo'];
            //$estudante_curso = $_POST['estudante_curso'];
            //$data_nascimento = $_POST['data_nascimento'];
            //$endereco_residencial = $_POST['endereco_residencial'];
            //$nome_conjuge = $_POST['nome_conjuge'];
            //$nome_pai = $_POST['nome_pai'];
            //$nome_mae = $_POST['nome_mae'];
            //$cpf = $_POST['cpf'];
            //$rg = $_POST['rg'];
            $local_nascimento = $_POST['local_nascimento'];
            $nacionalidade = $_POST['nacionalidade'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            //$cep = $_POST['cep'];
            //$telefone_familia = $_POST['telefone_familia'];
            $sexo = $_POST['sexo'];
            //$estado_civil = $_POST['estado_civil'];
                //$kitnet = $_POST['kitnet'];

            $nome = clean_input($nome);
            $email = clean_input($email);
            $mensagem = clean_input($mensagem);
            $telefone = clean_input($telefone);
            $data = clean_input($data);
            $profissao = clean_input($profissao);
            $local_trabalho = clean_input($local_trabalho);
            $endereco_comercial = clean_input($endereco_comercial);
            $local_estudo = clean_input($local_estudo);
            $estudante_curso = clean_input($estudante_curso);
            $endereco_residencial = clean_input($endereco_residencial);
            $nome_conjuge = clean_input($nome_conjuge);
            $nome_pai = clean_input($nome_pai);
            $nome_mae = clean_input($nome_mae);
            $cpf = clean_input($cpf);
            $rg = clean_input($rg);
            $local_nascimento = clean_input($local_nascimento);
            $nacionalidade = clean_input($nacionalidade);
            $cidade = clean_input($cidade);
            $estado = clean_input($estado);
            $cep = clean_input($cep);
            $telefone_familia = clean_input($telefone_familia);
            $sexo = clean_input($sexo);
            $estado_civil = clean_input($estado_civil);
                //$kitnet = clean_input($kitnet);

            $texto_msg = 'E-mail enviado do sistema de reservas do site de kitnets' . '<br><br>' .
                'Nome: ' . $nome . '<br>' .
                'E-mail: ' . $email . '<br>' . 
                //'Kitnet escolhida: ' . $kitnet . '<br>' .
            'Telefone: ' . $telefone . '<br>' .
                'Data: ' . $data . '<br>' .
                //'Profissão: ' . $profissao . '<br>' .
                //'Local de trabalho: ' . $local_trabalho . '<br>' .
                //'Endereço comercial: ' . $endereco_comercial . '<br>' .
            'Instituição em que estuda: ' . $local_estudo . '<br>' .
                //'Endereço residencial: ' . $endereco_residencial . '<br>' .
                //'Nome cônjuge: ' . $nome_conjuge . '<br>' .
                //'Nome do pai: ' . $nome_pai . '<br>' .
                //'Nome da mãe: ' . $nome_mae . '<br>' .
                //'CPF: ' . $cpf . '<br>' .
                //'RG: ' . $rg . '<br>' .
            //'Local de nascimento: ' . $local_nascimento . '<br>' .
            'Nacionalidade: ' . $nacionalidade . '<br>' .
                'Cidade: ' . $cidade . '<br>' .
                'Estado: ' . $estado . '<br>' .
                //'CEP: ' . $cep . '<br>' .
                //'Telefone da família: ' . $telefone_familia . '<br>' .
            'Sexo: ' . $sexo . '<br>' .
                //'Estado civil: ' . $estado_civil . '<br>' .
            'Mensagem: ' . $mensagem . '<br>';

                //Função require e use coloquei acima pois não pode ficar dentro do if
    
                // Criação do Objeto da Classe PHPMailer
            $mail = new PHPMailer(true);


            try {
                    // na guia de google_links.txt eu vejo todas informações do servidor, como servidor, porta etc
                    
                    //Retire o comentário abaixo para soltar detalhes do envio (como erro port ex)
                    // $mail->SMTPDebug = 2;                                
                    
                    // Usar SMTP para o envio do e-mail
                $mail->isSMTP();                                      

                    // Detalhes do servidor (No nosso exemplo é o Google)
                $mail->Host = 'smtp.gmail.com';

                    // Permitir autenticação SMTP
                $mail->SMTPAuth = true;                               

                    // Nome do usuário
                $mail->Username = 'laur.kitnet@gmail.com';        
                    // Senha do E-mail         
                $mail->Password = '1234';                           
                    // Tipo de protocolo de segurança
                $mail->SMTPSecure = 'tls';   

                    // Porta de conexão com o servidor                        
                $mail->Port = 587;

                    
                    // Garantir a autenticação com o Google
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

                    // Remetente
                $mail->setFrom($email, $nome);
                    
                    // Destinatário
                $mail->addAddress('laur.kitnet@gmail.com', 'Laurs Kitnets');

                    // Conteúdo

                    // Define conteúdo como HTML
                $mail->isHTML(true);                                  

                    // Assunto
                $mail->Subject = 'Novo pedido de reserva';
                $mail->Body = $texto_msg;
                $mail->AltBody = $texto_msg;

                    // Enviar E-mail
                $mail->send();
                    //$confirmacao = 'Mensagem enviada com sucesso! Faremos análise do seu perfil, assim que aprovado entraremos em contato. Prazo de 1 dia útil.';
                $confirmacao = 'Pré-cadastro efetuado com sucesso! Entraremos em contato até 1 dia útil.';
            } catch (Exception $e) {
                $confirmacao = 'A mensagem não pôde ser enviada, favor entrar em contato diretamente
                    via WhatsApp através do número (11) 95228-6097';
            }

        }
/* Teste formulário
                $nome = clean_input($nome);
                $email = clean_input($email);
                $mensagem = clean_input($mensagem);
                $telefone = clean_input($telefone);
                $data = clean_input($data);
                $num_pessoas = clean_input($num_pessoas);

                echo $nome . '<br>';
                echo $email . '<br>';
                echo $mensagem . '<br>';
                echo $telefone . '<br>';
                echo $data . '<br>';
                echo $num_pessoas . '<br>';
         */


        ?>

    </div>
</div>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <p><?php echo $confirmacao; ?></p>
<?php 
} ?>
</div>

<?php include 'footer.php'; ?>