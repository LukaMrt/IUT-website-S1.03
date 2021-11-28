<?php

if (!isset($router)) {
    return;
}

$current = 'about';
$css = '<link href="style/about.css" rel="stylesheet">';
$js = '<script src="js/carousel.js" defer></script>';

$authors = [
    <<<HTML
        <img src="img/Melvyn.png" class="profile-picture" alt="Image Melvyn">
        <h2>Melvyn</h2>
        <p>Futur UX designer</p>
        <p>Il aime les céréales en dessert</p>
        <p>Il est sûr que les aliens existent</p>
        <p><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">melvyn-delpree.com</a></p>
        <p><a href="https://www.linkedin.com/in/melvyn-delpree-07a710221/" target="_blank">LinkedIn</a></p>
    HTML,
    <<<HTML
        <img src="img/Luka.png" class="profile-picture" alt="Image Luka">
        <h2>Luka</h2>
        <p>Futur ingénieur INSA</p>
        <p>Il aime les photos de lui bébé</p>
        <p>Il rêve de majorer un DS de maths</p>
        <p><a href="https://lukamaret.com" target="_blank">lukamaret.com</a></p>
        <p><a href="https://www.linkedin.com/in/luka-maret-b04326182/" target="_blank">LinkedIn</a></p>
    HTML
];

shuffle($authors);
?>

<h1>À propos de nous</h1>

<div class="carousel">
    <div class="carousel-container">
        <div class="slide-holder">
            <div class="author first-child active">
                <?= $authors[0] ?>
            </div>
            <div class="author second-child">
                <?= $authors[1] ?>
            </div>
        </div>
    </div>
</div>

<div>
    <input id="carousel-1" type="radio" name="carousel" autocomplete="off" checked>
    <input id="carousel-2" type="radio" name="carousel" autocomplete="off">
    <label class="carousel" for="carousel-1"></label>
    <label class="carousel" for="carousel-2"></label>
</div>

<h2>Nous contacter</h2>

<form action="<?= $router->url('home_post') ?>" method="post">
    <div>
        <label for="name">
            <input id="name" type="text" name="name" placeholder="Nom">
        </label>
        <label for="lastName">
            <input id="lastName" type="email" name="email" placeholder="Email">
        </label>
    </div>
    <label for="message">
        <input id="message" type="text" name="message" placeholder="Message">
    </label>
    <button type="submit">Envoyer</button>
</form>
