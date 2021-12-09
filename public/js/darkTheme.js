document.getElementById("toggle-inner").addEventListener("click", function () {

    let url = document.URL;

    if (url.includes("dark")) {

        url = url.replace("dark=true", "")

        if (url.substr(-1) === "?") {
            url = url.replace("?", "");
        }

        document.location.href = url;
        return;
    }

    if (url.substr(-1) === "/") {
        window.location.href = url + "accueil?dark=true";
        return;
    }

    window.location.href = url + "?dark=true";
});

function applyTheme() {

    if (!document.location.search.includes("dark=true")) {
        return;
    }

    const rootStyle = document.querySelector(':root').style;
    rootStyle.setProperty('--light-background', '#2b2933');
    rootStyle.setProperty('--dark-background', '#1c191f');
    rootStyle.setProperty('--light-blue', '#59BCE7');
    rootStyle.setProperty('--dark-blue', '#2d8eb6');
    rootStyle.setProperty('--text-color', '#e7e7e7');
    rootStyle.setProperty('--light-text-color', '#e7e7e7');

    let images = document.getElementsByTagName('img');
    for (let i = 0; i < images.length; i++) {

        if (images[i].hasAttribute("dark")) {
            images[i].src = images[i].getAttribute("dark");
        }

    }

}

applyTheme();
