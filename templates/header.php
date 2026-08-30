<?php
/** @var array $appConfig */
/** @var array $meta */
/** @var string $canonicalPath */
$canonicalPath = $canonicalPath ?? '/';
$canonicalUrl = rtrim($appConfig['url'], '/') . $canonicalPath;
?>
<!doctype html>
<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($meta['title']) ?></title>
    <meta name="description" content="<?= e($meta['description']) ?>">
    <?php if (!$appConfig['seo_indexable']): ?>
        <meta name="robots" content="noindex,nofollow">
    <?php else: ?>
        <link rel="canonical" href="<?= e($canonicalUrl) ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<header class="site-header">
    <a class="brand" href="/">PROA Nadadores</a>
    <nav aria-label="Navegación principal">
        <a href="/programas.php">Programas</a>
        <a href="/atletas-logros.php">Atletas y logros</a>
        <a href="/historia.php">Historia</a>
        <a href="/noticias.php">Noticias</a>
        <a href="/contacto.php">Contacto</a>
    </nav>
</header>
<main>
