<?php

declare(strict_types=1);
require __DIR__ . '/../../app/bootstrap.php';
?>
<!doctype html>
<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin | PROA Nadadores</title>
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<main class="admin-shell">
    <p class="eyebrow">PROA · Administración</p>
    <h1>Panel base</h1>
    <p class="lead">Esqueleto inicial. Todavía no permite mutaciones: autenticación, permisos, CSRF, persistencia y auditoría se implementarán antes de habilitar edición real.</p>

    <section>
        <h2>Configuraciones previstas</h2>
        <div class="admin-grid">
            <article class="admin-card"><h3>Redes sociales</h3><p>Instagram, Facebook y otros canales editables desde Admin.</p></article>
            <article class="admin-card"><h3>Contacto</h3><p>WhatsApp, correo, ubicación y horarios.</p></article>
            <article class="admin-card"><h3>Contenido</h3><p>Programas, atletas, logros, historia y noticias.</p></article>
        </div>
    </section>

    <section>
        <h2>Valores de demostración actuales</h2>
        <div class="admin-grid">
            <?php foreach ($socialLinks as $network => $social): ?>
                <article class="admin-card">
                    <strong><?= e(ucfirst($network)) ?></strong>
                    <p><?= e($social['label']) ?></p>
                    <small>Placeholder: <?= $social['is_placeholder'] ? 'sí' : 'no' ?></small>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>
</body>
</html>
