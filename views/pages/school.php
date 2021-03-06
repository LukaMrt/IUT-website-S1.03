<?php
$current = 'school';
$css = <<<HTML
    <link href="style/school.css" rel="stylesheet">
    <link href="style/headband.css" rel="stylesheet">
HTML;
$js = '<script src="js/headband.js" defer></script>';
?>

<h1>Étudier à l'IUT Lyon 1, site la Doua</h1>

<img src="img/lyon.png" alt="Image lyon" class="big-img">

<custom-headband class="headband"></custom-headband>

<div class="school-content">

    <!--    <img src="img/iut.png" alt="Photo IUT">-->
    <img src="img/iut.jpg" alt="Photo IUT">

    <article>
        <h2>Site de l'IUT</h2>
        <p>
            L'IUT Lyon 1, site la Doua, regroupe 6 BUT : BUT Informatique, BUT Chimie, BUT Génie Chimique et Génie des
            Procédés, BUT Génie Biologique, BUT Génie
            Civil et BUT Gestion des Entreprises et des Administrations. Étant assez à l'écart du centre du campus,
            l'environnement est très calme et propice au travail. En plus de cet avantage sonore, l'IUT reste bien placé
            puisqu'il est très facile de se rendre dans des magasins, restaurants universitaires ou autre en prenant le
            tramway ou simplement à pied. Côté travail, les étudiants sont très bien accompagnés par l'IUT qui organise
            des sessions de tutorat pour aider les personnes ayant des difficultés dans certaines matières.
        </p>
    </article>

</div>

<div class="school-content reverse">

    <img src="img/computers.jpeg" alt="Images matériel informatique">

    <article>
        <h2>Matériel informatique</h2>
        <p>
            Le site de la Doua de l’IUT Lyon 1 est équipé de matériel informatique de qualité qui permet de développer
            des applications et des sites web ou de modéliser des bases de données sans connaître le moindre
            ralentissement. Les salles informatiques sont accessibles tout le temps si elles ne sont pas occupées par un
            cours. Pour travailler chez soi, il est aussi souvent possible d'obtenir des aides afin de disposer d'un
            ordinateur portable (souvent de prêt).
        </p>
    </article>

</div>
<div class="school-content bde">

    <img src="img/bde.png" alt="Logo BDE">

    <article>
        <h2>Bureau des étudiants</h2>
        <p>
            Le département informatique de L’IUT Lyon 1 la Doua a un BDE (bureau des étudiants) actif qui organise des
            évènements de tous genres comme des soirées, des after-work, des tournois de jeux vidéo, d’art ou autres. Un
            service de parrainage assemblant des étudiants de première année et des étudiants de deuxième année pour de
            l’aide pour les cours ou pour faire des rencontres plus facilement est aussi mise en place
        </p>
    </article>

</div>


<h2>Situer l'IUT</h2>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.252654117773!2d4.880484115757669!3d45.786165819922466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c01be700d079%3A0x822f9923c40658e3!2sIUT%20LYON%201%20-%20Accueil%2C%2069100%20Villeurbanne!5e0!3m2!1sfr!2sfr!4v1637147285367!5m2!1sfr!2sfr"
        allowfullscreen loading="lazy" class="map"></iframe>
