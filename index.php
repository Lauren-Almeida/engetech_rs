<?php
$feedback = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $whatsapp = trim($_POST['whatsapp'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    if ($nome === '' || $email === '' || $mensagem === '') {
        $feedback = ['tipo' => 'erro', 'texto' => 'Preencha nome, e-mail e mensagem.'];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $feedback = ['tipo' => 'erro', 'texto' => 'Informe um e-mail válido.'];
    } else {
        // Aqui você pode integrar SMTP, PHPMailer ou salvar em banco de dados.
        $feedback = ['tipo' => 'ok', 'texto' => 'Mensagem recebida! Em produção, conecte este formulário ao seu e-mail/SMTP.'];
    }
}

$services = [
    ['icon' => './assets/img/engrenagem.png', 'title' => 'Câmbio Automático', 'text' => 'Reparo, revisão e manutenção de transmissões automáticas de todas as marcas.'],
    ['icon' => './assets/img/diagnostico.png', 'title' => 'Diagnóstico Avançado', 'text' => 'Scanner profissional e análise eletrônica precisa para identificar a causa real.'],
    ['icon' => './assets/img/manutencao.png', 'title' => 'Manutenção Preventiva', 'text' => 'Troca de óleo de câmbio, filtros e revisões programadas.'],
    ['icon' => './assets/img/reparo.png', 'title' => 'Reparo Mecânico', 'text' => 'Serviços mecânicos gerais com qualidade e garantia.'],
];

// $systems = [
//     ['DSG / DCT', 'Audi, Volkswagen e aplicações de dupla embreagem'],
//     ['POWERSHIFT', 'Ford e aplicações compatíveis'],
//     ['DUALOGIC / GSR', 'Fiat e sistemas automatizados'],
//     ['I-MOTION', 'Volkswagen e linha automatizada'],
//     ['PDK', 'Porsche e aplicações esportivas'],
//     ['HALDEX', 'Sistemas de tração integral e acoplamento'],
// ];
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Centro automotivo especializado em diagnóstico e transmissão automatizada.">
    <title>Engetech | Câmbio automático - Pelotas/RS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="./assets/img/logo-edt.png">
</head>

<body>
    <main>
        <?php
            require 'cabecalho.php';
            require 'inicio.php';
            // require 'banner.php';
            require 'sobre.php';
            require 'servicos.php';
            // require 'veiculos-atendidos.php';
        ?>
    </main>
</body>
    <?php
        // require 'contato.php';
        require 'rodape.php';
    ?>

</html>