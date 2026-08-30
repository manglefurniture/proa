<?php

declare(strict_types=1);
require __DIR__ . '/../app/bootstrap.php';

$meta = page_meta(
    'PROA Nadadores | Demo',
    'Demo de PROA Nadadores: formación, programas, atletas, logros y trayectoria deportiva en Cancún.'
);
$canonicalPath = '/';
require __DIR__ . '/../templates/header.php';
?>
<section class="hero">
    <p class="eyebrow">PROA Nadadores · Demo</p>
    <h1>Formación, equipo y trayectoria en el agua.</h1>
    <p class="lead">Estructura inicial del nuevo sitio. El contenido y la identidad visual definitiva se incorporarán en las siguientes etapas.</p>
</section>
<section class="grid" aria-label="Áreas principales">
    <article class="card"><h2>Programas</h2><p>Formación, desarrollo, competencia, Masters y aguas abiertas.</p></article>
    <article class="card"><h2>Atletas y logros</h2><p>Espacio para resultados verificables, podios y evolución deportiva.</p></article>
    <article class="card"><h2>Historia</h2><p>Trayectoria, competencias y momentos relevantes de PROA.</p></article>
    <article class="card"><h2>Noticias</h2><p>Resultados, convocatorias y actividad del equipo.</p></article>
</section>
<?php require __DIR__ . '/../templates/footer.php'; ?>
