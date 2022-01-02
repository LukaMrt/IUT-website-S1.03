function addListener(first) {
    document.getElementById("carousel-" + (first ? "1" : "2")).addEventListener("click", () => {
        document.querySelector(first ? ".first-child" : ".second-child").classList.add("active");
        document.querySelector(first ? ".second-child" : ".first-child").classList.remove("active");
    });
}

addListener(true);
addListener(false);
