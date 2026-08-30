<?php

declare(strict_types=1);
require __DIR__ . '/../app/bootstrap.php';
$meta = page_meta('Contacto | PROA Nadadores', 'Página de contacto del demo de PROA Nadadores.');
$canonicalPath = '/contacto.php';
require __DIR__ . '/../templates/header.php';
?>
<section class="page-intro">
    <p class="eyebrow">Contacto</p>
    <h1>Conecta con PROA.</h1>
    <p class="lead">La estructura queda lista para ubicación, horarios y canales oficiales cuando sean confirmados.</p>
</section>
<div class="notice">
    Durante el demo, los enlaces disponibles pueden apuntar a Hache Interactive únicamente para mostrar el funcionamiento de los canales configurables.
</div>
<section class="grid">
    <?php foreach ($socialLinks as $network => $social): ?>
        <article class="card">
            <h2><?= e(ucfirst($network)) ?></h2>
            <p><?= e($social['label']) ?></p>
            <?php if (!empty($social['url'])): ?>
                <a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer">Abrir canal</a>
            <?php endif; ?>
        </article>
    <?php endforeach; ?>
</section>
<?php require __DIR__ . '/../templates/footer.php'; ?>
