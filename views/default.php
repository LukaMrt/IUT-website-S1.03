<?php

if (!isset($router) || !isset($content) || !isset($current) || !isset($css) || !isset($js)) {
    die();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="style/variables.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/header.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
    <?= $js . "\n" ?>
    <?= $css . "\n" ?>
    <script src="js/menu.js" defer></script>
    <script src="js/christmasTheme.js" defer></script>
    <script src="js/darkTheme.js" defer></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>BUT Info Lyon 1</title>
</head>

<body>

<header>

    <div class="responsive-header">
        <img src="img/Lyon-1-Claude-Bernard.png" data-dark="img/Lyon-1-Claude-Bernard-dark.png" alt="Logo université Claude Bernard">

        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    <div class="menu">
        <p><a href="<?= $router->url('home') . (isset($_GET['dark']) ? '?dark=true' : '')?>" class="<?= $current == 'home' ? 'current' : 'page-link' ?>">BUT ?</a>
        </p>

        <p><a href="<?= $router->url('future') . (isset($_GET['dark']) ? '?dark=true' : '')?>" class="<?= $current == 'future' ? 'current' : 'page-link' ?>">Post-BUT</a>
        </p>

        <p><a href="<?= $router->url('school') . (isset($_GET['dark']) ? '?dark=true' : '')?>" class="<?= $current == 'school' ? 'current' : 'page-link' ?>">L'IUT
                Lyon 1</a></p>

        <p><a class="about page-btn" href="<?= $router->url('about') . (isset($_GET['dark']) ? '?dark=true' : '')?>">À propos</a></p>

    </div>

</header>

<main>

    <div id="snow" class="snowflakes hidden" aria-hidden="true">
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
    </div>

    <?= $content ?>

</main>

<footer>
    <img src="img/footer.png" data-dark="img/footer-dark.png" alt="footer image">

    <div>

        <article class="footer-left">
            <h2 class="center"><a href="<?= $router->url('about') . (isset($_GET['dark']) ? '?dark=true' : '')?>" class="contact-link">À propos</a></h2>

            <p>Thème sombre :</p>
            <div class="switch">
                <div class="toggle">
                    <div class="toggle-state <?= isset($_GET['dark']) ?? 'checked'?>"></div>
                    <div id="toggle-inner" class="toggle-inner">
                        <div class="indicator"></div>
                    </div>
                    <div class="active-bg"></div>
                </div>
            </div>
        </article>

        <article class="center">
            <h2 class="footer-title">IUT Lyon 1</h2>
            <p class="footer-subtitle"><em>L'excellence technologique</em></p>
        </article>

        <article class="credits">
            <h2>
                Crédits icônes <a href="https://www.flaticon.com" target="_blank" class="credits"><em>flaticons</em></a>
                :
            </h2>

            <ul>
                <li><a href="https://www.flaticon.com/fr/auteurs/kosonicon" title="kosonicon"
                       target="_blank">kosonicon</a></li>
                <li><a href="https://www.flaticon.com/fr/auteurs/uniconlabs" title="Uniconlabs" target="_blank">Uniconlabs</a>
                </li>
                <li><a href="https://www.freepik.com/" title="Freepik" target="_blank">Freepik</a></li>
                <li><a href="https://www.flaticon.com/authors/triangle-squad" title="Triangle Squad" target="_blank">Triangle
                        Squad</a></li>
                <li><a href="https://www.flaticon.com/fr/auteurs/dreamicons" title="dreamicons" target="_blank">dreamicons</a>
                </li>
                <li><a href="https://www.flaticon.com/authors/eucalyp" title="eucalyp" target="_blank">Eucalyp</a></li>
                <li><a href="https://www.flaticon.com/fr/auteurs/pixel-perfect" title="Pixel perfect" target="_blank">Pixel
                        perfect</a></li>
            </ul>

        </article>
    </div>

</footer>

<?php if (defined('DEBUG_TIME')) { ?>
    Page générée en <?= round(1_000 * (microtime(true) - DEBUG_TIME)) ?>ms.
<?php } ?>

</body>

</html>
