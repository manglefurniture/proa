<?php

declare(strict_types=1);

return [
    'name' => 'PROA Nadadores',
    'url' => getenv('APP_URL') ?: 'https://proa.hacheinteractive.com',
    'timezone' => getenv('APP_TIMEZONE') ?: 'America/Cancun',
    'environment' => getenv('APP_ENV') ?: 'development',
    'seo_indexable' => filter_var(getenv('SEO_INDEXABLE') ?: 'false', FILTER_VALIDATE_BOOL),
];
