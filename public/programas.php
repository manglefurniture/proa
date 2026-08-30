<?php

declare(strict_types=1);
require __DIR__ . '/../app/bootstrap.php';
$meta = page_meta('Programas | PROA Nadadores', 'Programas y disciplinas del demo de PROA Nadadores.');
$canonicalPath = '/programas.php';
require __DIR__ . '/../templates/header.php';
?>
<section class="page-intro">
    <p class="eyebrow">Programas</p>
    <h1>Una ruta para cada etapa del nadador.</h1>
    <p class="lead">Esta página queda preparada para organizar la oferta vigente de PROA cuando confirmemos programas, edades, horarios y requisitos.</p>
</section>
<section class="grid">
    <article class="card"><h2>Iniciación</h2><p>Base técnica y adaptación al medio acuático.</p></article>
    <article class="card"><h2>Desarrollo</h2><p>Perfeccionamiento técnico y progresión deportiva.</p></article>
    <article class="card"><h2>Equipo competitivo</h2><p>Entrenamiento orientado a rendimiento y competencia.</p></article>
    <article class="card"><h2>Masters</h2><p>Entrenamiento para nadadores adultos con objetivos deportivos.</p></article>
    <article class="card"><h2>Aguas abiertas</h2><p>Preparación para pruebas y retos fuera de alberca.</p></article>
    <article class="card"><h2>Natación artística</h2><p>Disciplina presente como parte secundaria de la trayectoria de PROA.</p></article>
</section>
<?php require __DIR__ . '/../templates/footer.php'; ?>
