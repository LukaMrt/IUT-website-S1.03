window.addEventListener("keydown", (event) => {

    const container = document.querySelector(".snowflakes");

    if (event.keyCode === 78 && container.classList.contains("hidden")) {
        container.classList.remove("hidden");
        return;
    }

    if (event.keyCode === 78) {
        container.classList.add("hidden");
    }

});
