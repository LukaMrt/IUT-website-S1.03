<?php
$current = 'home';
$css = <<<HTML
    <link href="style/home.css" rel="stylesheet">
    <link href="style/headband.css" rel="stylesheet">
HTML;
$js = <<<HTML
    <script src="js/headband.js" defer></script>
    <script src="js/card.js" defer></script>
HTML;
?>

<h1>Qu'est-ce que le BUT ?</h1>

<img src="img/data.png" alt="Image ordinateur" class="big-img">

<custom-headband class="headband"></custom-headband>

<h2><em>À retenir</em></h2>

<div class="cards">

    <custom-card title="Temps de formation"
          content="1 800h de cours en plus des projets tutorés réparties en 3 ans de BUT."></custom-card>

    <custom-card title="Matières enseignées"
          content="Développement web, Conception de bases de données, Mathématiques, SQL, Langage C, Bases de l'économie, Algorithmique, Communication, Architecture des ordinateurs, Systèmes d'exploitation, Projet personnel et professionnel, Git."></custom-card>

    <custom-card title="Horaires hebdomadaires"
          content="Environ 30h de cours par semaine. Les cours ont lieu de 8h à 18h avec une pause de 12h à 14h et sont tous des cours de 2h. Le jeudi après-midi est libre."></custom-card>

    <custom-card title="Types de cours"
          content="Il y a 3 types de cours : les cours en amphithéâtre avec l'ensemble de la promotion (130 étudiants), les Travaux Dirigés (TD) en groupe (25 étudiants) et le Travaux Pratiques (TP) en demi-groupe (12 étudiants)."></custom-card>

    <custom-card title="Prix de la formation"
          content="La formation en elle-même est gratuite. Il faut cependant payer sa Contribution à la Vie Étudiante du Campus (CVEC, 90€) et son inscription à l'université (170€). Les étudiants boursiers sont exonérés de ces coûts."></custom-card>

    <custom-card title="Organisation de l'année"
          content="La formation est découpée en semestres indépendants. Les matières changent chaque semestre. Les groupes d'étudiants sont aussi remélangés (information à vérifier)."></custom-card>

</div>


<article>
    <h2><em>Prérequis</em></h2>

    <div class="prerequisites">
        <div>
            <img src="img/data.png" alt="Image ordinateur">
            <p>
                Il n’est pas nécessaire de savoir développer pour intégrer le BUT mais cela permet d'avoir des bases qui
                peuvent faciliter la compréhension de certaines matières.
            </p>
        </div>
        <div>
            <img src="img/maths.png" alt="Image mathématiques">
            <p>
                Il est important d’avoir des connaissances en mathématiques, au moins celle enseigné en baccalauréat
                STI2D
                ou en baccalauréat général spécialité mathématiques.
            </p>
        </div>
        <div>
            <img src="img/degree.png" alt="Image diplôme">
            <p>
                Pour rentrer en BUT Informatique, il faut un baccalauréat général avec des spécialités scientifiques ou
                un
                baccalauréat STI2D.
            </p>
        </div>
        <div>
            <img src="img/engineer.png" alt="Image ingénieur">
            <p>
                Savoir travailler en autonomie est crucial pour pouvoir réussir son BUT. Il est aussi important de
                savoir
                travailler en groupe pour les projets semestriels.
            </p>
        </div>
    </div>
</article>

<div class="validation">
    <article>

        <h2><em>Notation du BUT</em></h2>

        <p>
            La notation en BUT resemble beaucoup à celle du lycée avec des contrôles fréquents et une moyenne. Celle-ci
            est séparée en 6 compétences. La grosse différence avec le lycée est la présence de projets à réaliser
            durant le semestre, chacun comptant pour 40% de la moyenne d'une compétence.
        </p>

    </article>

    <article>

        <h2><em>Valider son semestre</em></h2>

        <p>
            Pour valider son semestre, il faut avoir une moyenne d'au moins 8/20 dans toutes les compétences et au moins
            10/20 dans 3 compétences ou plus.
        </p>

    </article>
</div>
