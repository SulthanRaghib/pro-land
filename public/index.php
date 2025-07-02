<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Request::capture());

// Run sitemap generation
if (file_exists(__DIR__ . '/../routes/web.php')) {
    $sitemap = Sitemap::create()
        ->add(Url::create('/')->setLastModificationDate(now()))
        ->add(Url::create('/kontak-kami')->setLastModificationDate(now()))
        ->add(Url::create('/layanan-kami/proyek-pembangunan')->setLastModificationDate(now()))
        ->add(Url::create('/layanan-kami/proyek-baja-ringan')->setLastModificationDate(now()))
        ->add(Url::create('/layanan-kami/proyek-urugan')->setLastModificationDate(now()))
        ->add(Url::create('/layanan-kami/proyek-tambang')->setLastModificationDate(now()))
        ->add(Url::create('/layanan-kami/konsultan-properti')->setLastModificationDate(now()))
        ->add(Url::create('/layanan-kami/konsultan-pertambangan')->setLastModificationDate(now()))
        ->writeToFile(public_path('sitemap.xml'));
}
