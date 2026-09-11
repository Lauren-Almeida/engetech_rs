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