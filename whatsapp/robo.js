const wppconnect = require('@wppconnect-team/wppconnect');

var userStages = [];

wppconnect.create({
    session: 'whatsbot',
    autoClose: false,
    puppeteerOptions: { args: ['--no-sandbox'] }
})
    .then((client) =>
        client.onMessage((message) => {
            console.log('Mensagem digitada pelo usuário: ' + message.body);
            stages(client, message);
        }))
    .catch((error) =>
        console.log(error));


//  Stages = Olá  >>  Nome  >>  CPF  >> Fim
function stages(client, message) {
    stage = userStages[message.from];
    switch (stage) {
        case '1' || 'alugar':
            const alugar = message.body;
            sendWppMessage(client, message.from, 'Olá, tudo bem? Meu nome é Igor Laur. No momento estamos sem disponibilidade, a previsão é para dezembro. A kitnet que ficará disponível é a kitnet grande em caso de não renovação do morador atual. Segue as fotos: https://laur.com.br/kitnet-grande.php');
            sendWppMessage(client, message.from, 'Você digitou: *' + alugar + '*');
            userStages[message.from] = '1';
            break;
        case '2' || 'consultoria':
            const consultoria = message.body;
            sendWppMessage(client, message.from, 'Olá, você digitou: *' + consultoria + '*');
            sendWppMessage(client, message.from, 'Em breve um atendente irá lhe responder.');
            userStages[message.from] = '2';
            break;
        case 'Fim':
            sendWppMessage(client, message.from, 'Aguarde, em breve um atendente irá lhe responder.'); 
            break;
        default: // Olá 
            console.log('*Usuário atual* from:' + message.from);
            // @Laur.com.br agradece seu contato. Para adiantar o atendimento escolha a opção desejada, digite: 
            //sendWppMessage(client, message.from, 'Após escolher a opção desejada, em breve um atendente irá lhe responder.');
            sendWppMessage(client, message.from, '‎@Laur.com.br agradece seu contato. Para adiantar o atendimento escolha a opção desejada, digite:');
            //sendWppMessage(client, message.from, '*1 - Quero alugar kitnet;*');
            //sendWppMessage(client, message.from, '*2 - Consultoria para auxilio com a construção, regulamentos, implementação de novas tecnologias ou compras de novos imóveis.*');
            //userStages[message.from] = '1';
    }
}


function sendWppMessage(client, sendTo, text) {
    client
        .sendText(sendTo, text)
        .then((result) => {
            // console.log('SUCESSO: ', result); 
        })
        .catch((erro) => {
            console.error('ERRO: ', erro);
        });
}
