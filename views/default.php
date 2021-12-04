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

        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
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

<script>
    const r = document.querySelector(':root');
    const container = document.querySelector('.snowflakes');
    window.addEventListener("keydown", (event) => {
        if (event.keyCode === 78 && container.classList.contains("hidden")) {
            container.classList.remove("hidden");
        } else if (event.keyCode === 78) {
            container.classList.add("hidden");
        } else if (event.keyCode === 68) {
            r.style.setProperty('--light-background', '#3F4D55');
            r.style.setProperty('--dark-background', '#384045');
            r.style.setProperty('--dark-blue', '#2d8eb6');
            r.style.setProperty('--light-blue', '#438eb0');
            r.style.setProperty('--text-color', '#59BCE7');
            document.getElementById("ordinateur").src = "img/data-dark.png";
            document.getElementById("maths").src = "img/maths-dark.png";
            document.getElementById("degree").src = "img/degree-dark.png";
            document.getElementById("engineer").src = "img/engineer-dark.png";
        } else if (event.keyCode === 67) {
            r.style.setProperty('--light-background', '#FFFFFF');
            r.style.setProperty('--dark-background', '#FFFFFF');
            r.style.setProperty('--dark-blue', '#396AE5');
            r.style.setProperty('--light-blue', '#45A1F6');
            r.style.setProperty('--text-color', '#000000');
        }
    })
</script>
