<?php

declare(strict_types=1);
require __DIR__ . '/../app/bootstrap.php';
$meta = page_meta('Historia | PROA Nadadores', 'Trayectoria y momentos relevantes de PROA Nadadores.');
$canonicalPath = '/historia.php';
require __DIR__ . '/../templates/header.php';
?>
<section class="page-intro">
    <p class="eyebrow">Historia</p>
    <h1>Una trayectoria construida brazada a brazada.</h1>
    <p class="lead">Esta página alojará una línea de tiempo con hitos, competencias y evolución institucional confirmados.</p>
</section>
<section class="grid">
    <article class="card"><h2>Trayectoria</h2><p>Momentos relevantes y evolución del proyecto deportivo.</p></article>
    <article class="card"><h2>Competencia</h2><p>Participación estatal, nacional e internacional documentada.</p></article>
    <article class="card"><h2>Comunidad</h2><p>Personas y generaciones que han formado parte de PROA.</p></article>
</section>
<?php require __DIR__ . '/../templates/footer.php'; ?>
