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