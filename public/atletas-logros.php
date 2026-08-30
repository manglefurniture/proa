<?php

declare(strict_types=1);
require __DIR__ . '/../app/bootstrap.php';
$meta = page_meta('Atletas y logros | PROA Nadadores', 'Resultados, atletas y logros deportivos de PROA Nadadores.');
$canonicalPath = '/atletas-logros.php';
require __DIR__ . '/../templates/header.php';
?>
<section class="page-intro">
    <p class="eyebrow">Atletas y logros</p>
    <h1>Resultados que cuentan la historia del equipo.</h1>
    <p class="lead">Estructura preparada para mostrar únicamente resultados y perfiles con información verificada.</p>
</section>
<div class="notice">Los datos deportivos definitivos se cargarán desde fuentes verificadas y, posteriormente, desde administración.</div>
<section class="grid">
    <article class="card"><h2>Atletas</h2><p>Perfiles, especialidades y trayectoria.</p></article>
    <article class="card"><h2>Competencias</h2><p>Eventos, fechas, pruebas y clasificación.</p></article>
    <article class="card"><h2>Podios</h2><p>Resultados destacados con contexto y evidencia.</p></article>
</section>
<?php require __DIR__ . '/../templates/footer.php'; ?>
