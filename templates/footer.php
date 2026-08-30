</main>
<footer class="site-footer">
    <div>
        <strong>PROA Nadadores</strong>
        <p>Demo en construcción · Cancún, Quintana Roo.</p>
    </div>
    <div class="social-links" aria-label="Enlaces de demostración">
        <?php foreach ($socialLinks as $network => $social): ?>
            <?php if (!empty($social['url'])): ?>
                <a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer">
                    <?= e($social['label']) ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <small>Los datos de contacto mostrados durante esta etapa pueden ser placeholders de Hache Interactive.</small>
</footer>
<script src="/assets/js/app.js" defer></script>
</body>
</html>
