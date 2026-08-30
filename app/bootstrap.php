<?php

declare(strict_types=1);

$appConfig = require __DIR__ . '/../config/app.php';
$socialLinks = require __DIR__ . '/../config/social-defaults.php';

date_default_timezone_set($appConfig['timezone']);

if (!function_exists('e')) {
    function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

if (!function_exists('page_meta')) {
    function page_meta(string $title, string $description): array
    {
        return [
            'title' => $title,
            'description' => $description,
        ];
    }
}
