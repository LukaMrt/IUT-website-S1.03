const headbandContent =
    {
        home: {
            title: `Le Bachelor Universitaire de Technologie, ou BUT`,
            subtitle: `Le BUT est un diplôme national français qui s'obtient après 3 années de préparation dans un Institut Universitaire de Technologie (ou IUT). Il a la même valeur qu'une Licence tout en étant un diplôme plus professionnalisant. Les stages et projets réalisés durant les 3 années d'études permettent d'acquérir de l'expérience. Il existe 24 BUT différents, chacun permettant de se former dans une spécialisation différente. Parmi ces 24 spécialités, on trouve l'Informatique, la Chimie, le Génie Civil ou encore les Techniques de Management. Sur ce site, nous parlerons uniquement du BUT Informatique et plus particulièrement du BUT Informatique préparé sur le site de la Doua de l'Université Lyon 1.`,
            content: [
                {
                    title: `Durée du BUT`,
                    description: `Une BUT se prépare en 3 ans. Il est possible de quitter la formation après 2 en étant titulaire d'un DUT (Diplôme Universitaire de Technologie, remplacé par le BUT). La formation est découpée en 6 semestres, chacun étant distinct des autres par les matières qu'il contient et les évaluations qui permettent de le valider.`,
                    img: `img/clock.png`,
                    alt: `Horloge`
                },
                {
                    title: `Matières enseignées (Semestre 1)`,
                    description: `Développement web, Conception de bases de données, Mathématiques, SQL, Langage C, Bases de l'économie, Algorithmique, Communication, Architecture des ordinateurs, Systèmes d'exploitation, Projet professionnel personnalisé, Git.`,
                    img: `img/calendar.png`,
                    alt: `Calendrier`
                },
                {
                    title: `Qualités requises`,
                    description: `Rigueur, Méthode, Autonomie, Motivation, Curiosité.`,
                    img: `img/medal.png`,
                    alt: `Médaille`
                }
            ]
        },
        future: {
            title: `Que faire après l'obtention d'un BUT ?`,
            subtitle: ``,
            content: [
                {
                    title: `Master`,
                    description: `Il est possible de rentrer en Master après avoir réussi son BUT.`,
                    img: `img/scholarship.png`,
                    alt: `Parcours étudiant`
                },
                {
                    title: `Écoles d'ingénieur`,
                    description: `Les écoles d'ingénieur acceptent des étudiants sortant d'IUT.`,
                    img: `img/engineer.png`,
                    alt: `Ingénieur`
                },
                {
                    title: `Insertion professionnelle`,
                    description: `Le BUT est un diplôme professionnalisant reconnu qui permet de travailler dans le monde professionnel après son obtention.`,
                    img: `img/job-search.png`,
                    alt: `Monde professionnel`
                }
            ]
        },
        school: {
            title: `Institut Universitaire de Technologie`,
            subtitle: `1 Rue de la Technologie, 69100 Villeurbanne`,
            content: [
                {
                    title: `Ville de Lyon`,
                    description: `Étudier dans l'une des plus grandes villes étudiantes de Lyon.`,
                    img: `img/lyon-logo.png`,
                    alt: `Logo ville de Lyon`
                },
                {
                    title: `L'excellence technologique`,
                    description: `L'IUT se veut leader des formations scientifiques de niveau technicien dans la ville de Lyon. Il incarne l'excellence technologique portée par cette volonté.`,
                    img: `img/successful.png`,
                    alt: `Image succès`
                },
                {
                    title: `Entourage`,
                    description: `Il y a une très bonne ambiance parmi les étudiants de l'IUT. Les profs et le personnels sont très compétents et la formation est de qualité.`,
                    img: `img/team.png`,
                    alt: `Image groupe`
                }
            ]
        },
    };

let url = document.URL.split("/");
let value;

switch (url[url.length - 1]) {

    case "futur":
    case "future":
    case "poursuite":
    case "debouches":
    case "suite":
    case "orientation":
        value = headbandContent.future;
        break;

    case "ecole":
    case "school":
    case "iut":
        value = headbandContent.school;
        break;

    default:
        value = headbandContent.home;
        break;
}

document.querySelector(".headband").setAttribute("headband-content", JSON.stringify(value));

class HeadBand extends HTMLElement {

    constructor() {
        super();
        const content = JSON.parse(this.getAttribute("headband-content"));
        let header = document.createElement('div');
        header.innerHTML = `
                <div class="headband-header">
                    <article>
                        <h2>
                            ${content.title}
                        </h2>
                        <p>
                            ${content.subtitle}
                        </p>
                    </article>
                </div>
                `;

        let body = document.createElement('div');
        body.classList.add('headband-body');

        let emptyHeadband = document.createElement('div');
        emptyHeadband.classList.add('headband-empty');

        let cards = document.createElement('div');
        cards.classList.add('headband-cards');

        cards.appendChild(this.createCard(1, content.content[0]));
        cards.appendChild(this.createCard(2, content.content[1]));
        cards.appendChild(this.createCard(3, content.content[2]));

        body.appendChild(emptyHeadband);
        body.appendChild(cards);

        this.appendChild(header);
        this.appendChild(body);
    }

    createCard(number, content) {
        let card = document.createElement('div');
        card.classList.add('headband-card');
        card.classList.add('headband-card' + number);

        let title = document.createElement('div');
        title.classList.add('headband-card-title');
        title.innerHTML = `
                <img src="${content.img}" alt="${content.alt}" slot="headband-picture-${number}">
                <h2 slot="headband-title-${number}">${content.title}</h2>
                `;

        let description = document.createElement('div');
        description.classList.add('headband-card-description');
        description.innerHTML = `
                <div>
                    <p slot="headband-description-${number}">${content.description}</p>
                </div>
                `;

        card.appendChild(title);
        card.appendChild(description);
        return card;
    }

}

customElements.define("custom-headband", HeadBand);
