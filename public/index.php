<?php

use App\Router;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

define('DEBUG_TIME', microtime(true));

if (defined('DEBUG_TIME')) {
    $whoops = new Run();
    $whoops->pushHandler(new PrettyPageHandler);
    $whoops->register();
}

define('IMAGES_DIRECTORY', dirname(__DIR__) . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR);

$pagesViews = 'pages' . DIRECTORY_SEPARATOR;

$router = (new Router(new AltoRouter(), dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR))
    ->get('/', $pagesViews . 'home', 'home')
    ->get('/accueil', $pagesViews . 'home', 'home_2')
    ->get('/home', $pagesViews . 'home', 'home_3')
    ->get('/presentation', $pagesViews . 'home', 'home_3')
    ->get('/iut', $pagesViews . 'school', 'school')
    ->get('/ecole', $pagesViews . 'school', 'school_2')
    ->get('/school', $pagesViews . 'school', 'school_3')
    ->get('/futur', $pagesViews . 'future', 'future')
    ->get('/orientation', $pagesViews . 'future', 'future_2')
    ->get('/poursuite', $pagesViews . 'future', 'future_3')
    ->get('/a-propos', $pagesViews . 'about', 'about')
    ->get('/about', $pagesViews . 'about', 'about_2')
    ->get('/404', 'errors' . DIRECTORY_SEPARATOR . '404', '404')
    ->get('/[*]', 'errors' . DIRECTORY_SEPARATOR . '404', '404')
    ->run();
