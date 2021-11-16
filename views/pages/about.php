<?php
$current = 'about';
$css = <<<HTML
<link href="style/about.css" rel="stylesheet" >
HTML;
?>

<h1>À propos de nous</h1>

<div>
    <span class="author first-child active">
        <img src="img/Melvyn.png" class="pp" alt="Image Melvyn">
        <h2>Melvyn</h2>
        <p>Futur UX designer</p>
        <p>Il aime les céréales en dessert</p>
        <p>Il est sûr que les aliens existent</p>
        <p><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">melvyn-delpree.com</a></p>
        <p><a href="https://www.linkedin.com/in/melvyn-delpree-07a710221/" target="_blank">LinkedIn</a></p>
    </span>
    <span class="author second-child">
        <img src="img/Luka.png" class="pp" alt="Image Luka">
        <h2>Luka</h2>
        <p>Futur ingénieur INSA</p>
        <p>Il aime les photos de lui bébé</p>
        <p>Il rêve de majorer</p>
        <p><a href="https://lukamaret.com" target="_blank">lukamaret.com</a></p>
        <p><a href="https://www.linkedin.com/in/luka-maret-b04326182/" target="_blank">LinkedIn</a></p>
    </span>
</div>

<div>
    <input id="carousel-1" type="radio" name="carousel" autocomplete="off" checked>
    <input id="carousel-2" type="radio" name="carousel" autocomplete="off">
    <label for="carousel-1"></label>
    <label for="carousel-2"></label>
</div>

<script>

    function addListener(btn, add, remove) {
        btn.addEventListener("click", () => {
            document.querySelector(add).classList.add("active")
            document.querySelector(remove).classList.remove("active")
        })
    }

    addListener(document.getElementById("carousel-1"), ".author.first-child", ".author.second-child");
    addListener(document.getElementById("carousel-2"), ".author.second-child", ".author.first-child");
</script>