<?php

if (!isset($router) || !isset($content) || !isset($current)) {
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
    <title>BUT Info Lyon 1</title>
</head>

<body>

<header>

    <img src="img/Lyon-1-claude-Bernard.png" alt="Logo université Claude Bernard">

    <div>
        <p><a href="<?= $router->url('home') ?>" class="page-link <?= $current == 'home' ? 'current' : '' ?>">BUT ?</a></p>

        <p><a href="<?= $router->url('future') ?>" class="page-link <?= $current == 'future' ? 'current' : '' ?>">Post-BUT</a></p>

        <p><a href="<?= $router->url('school') ?>" class="page-link <?= $current == 'school' ? 'current' : '' ?>">L'IUT Lyon 1</a></p>

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
                Les icônes utilisés sur le site ont été trouvés sur <a href="https://www.flaticon.com" target="_blank"><em>flaticons.com</em></a>
                et ont été réalisés par les artistes suivant :
            </p>

            <ul>
                <li><a href="https://www.flaticon.com/fr/auteurs/kosonicon" title="kosonicon" target="_blank">kosonicon</a></li>
                <li><a href="https://www.flaticon.com/fr/auteurs/uniconlabs" title="Uniconlabs" target="_blank">Uniconlabs</a></li>
                <li><a href="https://www.freepik.com/" title="Freepik" target="_blank">Freepik</a></li>
                <li><a href="https://www.flaticon.com/authors/triangle-squad" title="Triangle Squad" target="_blank">Triangle Squad</a></li>
                <li><a href="https://www.flaticon.com/fr/auteurs/dreamicons" title="dreamicons" target="_blank">dreamicons</a></li>
            </ul>

<!--            <p>-->
<!--                <a href="https://www.flaticon.com/fr/auteurs/kosonicon" title="kosonicon" target="_blank"-->
<!--                   class="artist">kosonicon</a>,-->
<!--                <a href="https://www.flaticon.com/fr/auteurs/uniconlabs" title="Uniconlabs" target="_blank"-->
<!--                   class="artist">Uniconlabs</a>,-->
<!--                <a href="https://www.freepik.com/" title="Freepik" target="_blank" class="artist">Freepik</a>,-->
<!--                <a href="https://www.flaticon.com/authors/triangle-squad" title="Triangle Squad" target="_blank"-->
<!--                   class="artist">Triangle-->
<!--                    Squad</a>-->
<!--                et <a href="https://www.flaticon.com/fr/auteurs/dreamicons" title="dreamicons" target="_blank"-->
<!--                      class="artist">dreamicons</a>-->
<!--            </p>-->
        </div>
    </div>

</footer>

<?php if (defined('DEBUG_TIME')) { ?>
    Page générée en <?= round(1_000 * (microtime(true) - DEBUG_TIME)) ?>ms.
<?php } ?>

</body>

</html>
