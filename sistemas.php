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