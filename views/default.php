<?php

if (!isset($router) || !isset($content) || !isset($current) || !isset($css) || !isset($js)) {
    exit(0);
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
    <title>BUT Info Lyon 1</title>
</head>

<body>

<header>

    <div class="responsive-header">
        <img src="img/Lyon-1-Claude-Bernard.png" alt="Logo université Claude Bernard">

        <img src="img/menu.png" alt="Menu" class="menu-btn">
    </div>


    <div class="menu">
        <p><a href="<?= $router->url('home') ?>" class="<?= $current == 'home' ? 'current' : 'page-link' ?>">BUT ?</a>
        </p>

        <p><a href="<?= $router->url('future') ?>" class="<?= $current == 'future' ? 'current' : 'page-link' ?>">Post-BUT</a>
        </p>

        <p><a href="<?= $router->url('school') ?>" class="<?= $current == 'school' ? 'current' : 'page-link' ?>">L'IUT
                Lyon 1</a></p>

        <p><a class="about page-btn" href="<?= $router->url('about') ?>">À propos</a></p>
    </div>

</header>

<main>
    <?= $content ?>
</main>

<footer>
    <img src="img/footer.png" alt="footer image">

    <div>

        <p class="center"><a href="<?= $router->url('about') ?>" class="contact-link">À propos</a></p>

        <div class="center">
            <p class="footer-title">IUT Lyon 1</p>
            <p class="footer-subtitle"><em>L'excellence technologique</em></p>
        </div>

        <div>
            <p>
                Crédits icônes <a href="https://www.flaticon.com" target="_blank" class="credits"><em>flaticons</em></a>
                :
            </p>

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

        </div>
    </div>

</footer>

<?php if (defined('DEBUG_TIME')) { ?>
    Page générée en <?= round(1_000 * (microtime(true) - DEBUG_TIME)) ?>ms.
<?php } ?>

</body>

</html>
