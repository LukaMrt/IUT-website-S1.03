let menuBtn = document.querySelector(".menu-btn");

menuBtn.addEventListener("click", function () {
    document.querySelector(".menu").classList.toggle("visible");
    menuBtn.classList.toggle("menu-btn-active");
});