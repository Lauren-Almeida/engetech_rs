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

$systems = [
    ['DSG / DCT', 'Audi, Volkswagen e aplicações de dupla embreagem'],
    ['POWERSHIFT', 'Ford e aplicações compatíveis'],
    ['DUALOGIC / GSR', 'Fiat e sistemas automatizados'],
    ['I-MOTION', 'Volkswagen e linha automatizada'],
    ['PDK', 'Porsche e aplicações esportivas'],
    ['HALDEX', 'Sistemas de tração integral e acoplamento'],
];
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
     <link rel="icon" type="image/png" href="./assets/imagens/logo-edt.png">
</head>

<body>
    <header class="site-header" id="topo">
        <div class="container nav-wrap">
<!-- 
            <a href="#">

                <span><img src="./assets/img/logo-edt.png" alt="Logo" class="img-fluid" style="max-height: 70px;"
                        id="img-logo"></span> <br>
            </a> -->
            <a class="brand" href="#topo" aria-label="TorqueLab - início">
                <span style="margin-top:auto;"><img src="./assets/img/logo-edt.png" alt="Logo" class="img-fluid" style="max-height: 70px;"
                        id="img-logo"></span>
                <span><strong>ENGETECH</strong><small><b>Câmbio automático - Pelotas/RS</b></small></span>
            </a>
            <button class="menu-toggle" type="button" aria-label="Abrir menu" aria-expanded="false">☰</button>
            <nav class="nav" aria-label="Navegação principal">
                <a href="#inicio">Home</a>
                <a href="#quem-somos">Quem somos</a>
                <a href="#servicos">Serviços</a>
                <a href="#sistemas">Sistemas</a>
                <a href="#diferenciais">Parceiros</a>
                <a href="#contato">Contato</a>
            </nav>
            <a class="btn btn-small nav-cta" href="https://wa.me/555333070971" target="_blank" rel="noopener">Agendar
                diagnóstico</a>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="hero-overlay"></div>
            <div class="container hero-content reveal">
                <!-- <p class="eyebrow">QUANDO O ASSUNTO É TRANSMISSÃO</p> -->
                <h1>ESPECIALISTAS EM<br>TRANSMISSÃO AUTOMÁTICA</h1>
                <p class="hero-copy">Diagnóstico preciso, reparos correto e preço justo.<br>A ENGETECH é referência em transmissão automática e diagnóstico avançado em Pelotas e região.</p>

                <div class="hero-actions">
                    <a class="btn" href="https://wa.me/555333070971" target="_blank" rel="noopener">Agendar
                        diagnóstico</a>
                    <a class="btn btn-ghost" href="#servicos">Conhecer serviços</a>
                </div>
            </div>
            <a class="scroll-hint" href="#quem-somos" aria-label="Ir para quem somos">⌄</a>
        </section>

        <section class="section about" id="quem-somos">
            <div class="container grid-2">
                <div class="about-art reveal">
                    <div class="photo-frame"><img src="assets/img/workshop.svg"
                            alt="Ilustração de oficina automotiva moderna"></div>
                    <div class="experience-card"><strong>15+</strong><span>anos de experiência técnica</span></div>
                </div>
                <div class="section-copy reveal">
                    <p class="eyebrow dark">ESPECIALISTAS EM TRANSMISSÕES</p>
                    <h2>Conhecimento técnico, estrutura e <span>confiança.</span></h2>
                    <p>Somos um centro automotivo focado em diagnóstico, reparo e manutenção de sistemas de transmissão
                        modernos. Nossa proposta combina precisão técnica, atendimento transparente e processos bem
                        definidos.</p>
                    <p>Trabalhamos com equipamentos específicos, testes em bancada e análise eletrônica para reduzir
                        tentativas, acelerar o diagnóstico e entregar um serviço mais seguro.</p>
                    <ul class="check-list">
                        <li>Diagnóstico orientado por dados</li>
                        <li>Ferramental específico</li>
                        <li>Equipe em atualização contínua</li>
                    </ul>
                    <a class="text-link" href="#contato">Fale com nossa equipe →</a>
                </div>
            </div>
        </section>

        <section class="section services" id="servicos">
            <div class="container">
                <div class="section-head reveal">
                    <div>
                        <p class="eyebrow">O QUE FAZEMOS</p>
                        <h2>Serviços especializados</h2>
                    </div>
                    <!-- <p>Do diagnóstico à manutenção, cada etapa é tratada com método, clareza e atenção aos detalhes.</p> -->
                </div>
                <div class="cards">
                    <?php foreach ($services as $service): ?>
                        <article class="service-card reveal">
                            <span class="service-icon"> <img src="<?= $service['icon'] ?>" alt="<?= $service['title'] ?>"></span>
                            <h3><?= htmlspecialchars($service['title']) ?></h3>
                            <p><?= htmlspecialchars($service['text']) ?></p>
                            <!-- <a href="#contato">Saiba mais <span>↗</span></a> -->
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section systems" id="sistemas">
            <div class="container">
                <div class="center-title reveal">
                    <p class="eyebrow">SISTEMAS QUE ATUAMOS</p>
                    <h2>Especialização em diferentes tecnologias</h2>
                    <p>Uma estrutura pensada para atender os principais sistemas de transmissão automatizada do mercado.
                    </p>
                </div>
                <div class="system-grid">
                    <?php foreach ($systems as $system): ?>
                        <article class="system-card reveal">
                            <span class="system-number">0<?= array_search($system, $systems) + 1 ?></span>
                            <h3><?= htmlspecialchars($system[0]) ?></h3>
                            <p><?= htmlspecialchars($system[1]) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="banner">
            <div class="container banner-inner reveal">
                <div>
                    <p class="eyebrow">DIAGNÓSTICO ESPECIALIZADO</p>
                    <h2>Seu carro precisa de uma avaliação?</h2>
                </div>
                <a class="btn light" href="https://wa.me/5511999999999" target="_blank" rel="noopener">Falar no
                    WhatsApp</a>
            </div>
        </section>

        <section class="section why" id="diferenciais">
            <div class="container grid-2 reverse-mobile">
                <div class="section-copy reveal">
                    <p class="eyebrow dark">POR QUE NOS ESCOLHER</p>
                    <h2>Precisão em cada <span>etapa do serviço.</span></h2>
                    <p>Mais do que trocar componentes, buscamos entender a causa da falha e apresentar uma solução
                        tecnicamente adequada.</p>
                    <div class="feature-grid">
                        <div><b>01</b>
                            <h3>Laboratório próprio</h3>
                            <p>Ambiente preparado para testes e validações.</p>
                        </div>
                        <div><b>02</b>
                            <h3>Diagnóstico preciso</h3>
                            <p>Equipamentos e procedimentos específicos.</p>
                        </div>
                        <div><b>03</b>
                            <h3>Equipe qualificada</h3>
                            <p>Capacitação contínua e experiência prática.</p>
                        </div>
                        <div><b>04</b>
                            <h3>Transparência</h3>
                            <p>Explicação clara do diagnóstico e orçamento.</p>
                        </div>
                    </div>
                </div>
                <div class="why-art reveal"><img src="assets/img/gear.svg"
                        alt="Ilustração técnica de transmissão automotiva"></div>
            </div>
        </section>

        <section class="section brands">
            <div class="container">
                <div class="center-title reveal">
                    <p class="eyebrow dark">VEÍCULOS ATENDIDOS</p>
                    <h2>Experiência multimarcas</h2>
                </div>
                <div class="brand-strip reveal" aria-label="Marcas atendidas">
                    <span>AUDI</span><span>VOLKSWAGEN</span><span>FORD</span><span>FIAT</span><span>BMW</span><span>PORSCHE</span><span>HYUNDAI</span><span>RENAULT</span>
                </div>
            </div>
        </section>

        <section class="contact" id="contato">
            <div class="container contact-grid">
                <div class="contact-copy reveal">
                    <p class="eyebrow">FALE CONOSCO</p>
                    <h2>Vamos cuidar da transmissão do seu veículo?</h2>
                    <p>Envie uma mensagem ou fale diretamente pelo WhatsApp. Substitua os dados abaixo pelos dados reais
                        da empresa.</p>
                    <div class="contact-list">
                        <a href="tel:+5511999999999"><span>☎</span>
                            <div><small>Telefone / WhatsApp</small><strong>(11) 99999-9999</strong></div>
                        </a>
                        <a href="mailto:contato@torquelab.com.br"><span>✉</span>
                            <div><small>E-mail</small><strong>contato@torquelab.com.br</strong></div>
                        </a>
                        <div><span>⌖</span>
                            <div><small>Endereço</small><strong>Av. Exemplo, 1000 — São Paulo/SP</strong></div>
                        </div>
                    </div>
                </div>
                <form class="contact-form reveal" method="post" action="#contato">
                    <h3>Solicite um contato</h3>
                    <?php if ($feedback): ?>
                        <div class="form-feedback <?= $feedback['tipo'] === 'ok' ? 'ok' : 'erro' ?>">
                            <?= htmlspecialchars($feedback['texto']) ?>
                        </div>
                    <?php endif; ?>
                    <label>Nome<input type="text" name="nome" placeholder="Seu nome" required></label>
                    <div class="form-row">
                        <label>E-mail<input type="email" name="email" placeholder="voce@email.com" required></label>
                        <label>WhatsApp<input type="text" name="whatsapp" placeholder="(00) 00000-0000"></label>
                    </div>
                    <label>Mensagem<textarea name="mensagem" rows="5" placeholder="Como podemos ajudar?"
                            required></textarea></label>
                    <button class="btn" type="submit">Enviar mensagem</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-grid">
            <div><a class="brand footer-brand" href="#topo"><span
                        class="brand-mark">T</span><span><strong>TORQUE</strong>LAB<small>TRANSMISSÃO &
                            TECNOLOGIA</small></span></a>
                <p>Performance, precisão e tecnologia para cuidar do seu veículo.</p>
            </div>
            <div>
                <h4>Navegação</h4><a href="#quem-somos">Quem somos</a><a href="#servicos">Serviços</a><a
                    href="#sistemas">Sistemas</a><a href="#contato">Contato</a>
            </div>
            <div>
                <h4>Atendimento</h4>
                <p>Seg–Sex: 08h–18h<br>Sábado: 08h–12h</p>
            </div>
        </div>
        <div class="container footer-bottom"><span>© <?= date('Y') ?> TorqueLab. Todos os direitos reservados.</span><a
                href="#topo">Voltar ao topo ↑</a></div>
    </footer>

    <a class="whatsapp-float" href="https://wa.me/5511999999999" target="_blank" rel="noopener"
        aria-label="Falar no WhatsApp">✆</a>
    <script src="assets/js/script.js"></script>
</body>

</html>