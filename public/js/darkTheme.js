document.getElementById("toggle-inner").addEventListener("click", function() {

    let url = document.URL;

    if (url.includes("dark")) {

        url = url.replace("dark=true", "")

        if (url.substr(-1) === "?") {
            url = url.replace("?", "");
        }

        document.location.href = url;
        return;
    }

    console.log(url);

    if (url.substr(-1) === "/") {
        window.location.href = url + "accueil?dark=true";
        return;
    }

    window.location.href = url + "?dark=true";
});

function applyTheme() {

    const r = document.querySelector(':root');

    if (document.querySelector(".toggle-state").classList.contains("checked")) {
        r.style.setProperty('--light-background', '#2b2933');
        r.style.setProperty('--dark-background', '#1c191f');
        r.style.setProperty('--dark-blue', '#2d8eb6');
        r.style.setProperty('--light-blue', '#59BCE7');
        r.style.setProperty('--text-color', '#e7e7e7');
        r.style.setProperty('--light-text-color', '#e7e7e7');

        let images = document.getElementsByTagName('img');
        for (let i = 0; i < images.length; i++) {

            let src = images[i].src.split("/");
            console.log(src);
            switch (src[src.length - 1]) {

                case 'arrow.png':
                    images[i].src = 'img/arrow-dark.png';
                    break;

                case 'calendar.png':
                    images[i].src = 'img/calendar-dark.png';
                    break;

                case 'clock.png':
                    images[i].src = 'img/clock-dark.png';
                    break;

                case 'data.png':
                    images[i].src = 'img/data-dark.png';
                    break;

                case 'degree.png':
                    images[i].src = 'img/degree-dark.png';
                    break;

                case 'engineer.png':
                    images[i].src = 'img/engineer-dark.png';
                    break;

                case 'job-search.png':
                    images[i].src = 'img/job-search-dark.png';
                    break;

                case 'maths.png':
                    images[i].src = 'img/maths-dark.png';
                    break;

                case 'medal.png':
                    images[i].src = 'img/medal-dark.png';
                    break;

                case 'scholarship.png':
                    images[i].src = 'img/scholarship-dark.png';
                    break;

                case 'team.png':
                    images[i].src = 'img/team-dark.png';
                    break;

                case 'lyon-logo.png':
                    images[i].src = 'img/lyon-logo-dark.png';
                    break;

            }

        }

        return;
    }

    r.style.setProperty('--light-background', '#FFFFFF');
    r.style.setProperty('--dark-background', '#FFFFFF');
    r.style.setProperty('--dark-blue', '#396AE5');
    r.style.setProperty('--light-blue', '#45A1F6');
    r.style.setProperty('--text-color', '#000000');
    r.style.setProperty('--light-text-color', '#FFFFFF');

    // let images = document.getElementsByTagName('img');
    // for (let i = 0; i < images.length; i++) {
    //
    //     switch (images[i].src) {
    //
    //         case 'img/arrow-dark.png':
    //             images[i].src = 'img/arrow.png';
    //             break;
    //
    //         case 'img/calendar-dark.png':
    //             images[i].src = 'img/calendar.png';
    //             break;
    //
    //         case 'img/clock-dark.png':
    //             images[i].src = 'img/clock.png';
    //             break;
    //
    //         case 'img/data-dark.png':
    //             images[i].src = 'img/data.png';
    //             break;
    //
    //         case 'img/degree-dark.png':
    //             images[i].src = 'img/degree.png';
    //             break;
    //
    //         case 'img/engineer-dark.png':
    //             images[i].src = 'img/engineer.png';
    //             break;
    //
    //         case 'img/job-search-dark.png':
    //             images[i].src = 'img/job-search.png';
    //             break;
    //
    //         case 'img/lyon-dark.png':
    //             images[i].src = 'img/lyon.png';
    //             break;
    //
    //         case 'img/maths-dark.png':
    //             images[i].src = 'img/maths.png';
    //             break;
    //
    //         case 'img/medal-dark.png':
    //             images[i].src = 'img/medal.png';
    //             break;
    //
    //         case 'img/scholarship-dark.png':
    //             images[i].src = 'img/scholarship.png';
    //             break;
    //
    //     }

}

applyTheme();
