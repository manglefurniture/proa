<?php

declare(strict_types=1);
require __DIR__ . '/../app/bootstrap.php';
$meta = page_meta('Noticias y resultados | PROA Nadadores', 'Noticias, convocatorias y resultados de PROA Nadadores.');
$canonicalPath = '/noticias.php';
require __DIR__ . '/../templates/header.php';
?>
<section class="page-intro">
    <p class="eyebrow">Noticias y resultados</p>
    <h1>Lo que está pasando dentro y fuera de la alberca.</h1>
    <p class="lead">Espacio preparado para publicaciones, resultados de competencias, convocatorias y novedades del equipo.</p>
</section>
<section class="grid">
    <article class="card"><h2>Resultados</h2><p>Crónicas y resultados verificados.</p></article>
    <article class="card"><h2>Próximos eventos</h2><p>Convocatorias y competencias por venir.</p></article>
    <article class="card"><h2>Historias PROA</h2><p>Contenido editorial sobre atletas, entrenamientos y comunidad.</p></article>
</section>
<?php require __DIR__ . '/../templates/footer.php'; ?>
