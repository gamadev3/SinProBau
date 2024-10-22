const menu = document.querySelector(".menu");
const menuCheckbox = document.querySelector(".menuCheckbox");
const navigationBar = document.querySelector(".navigation-bar");

menu.addEventListener("click", () => {
    console.log("Click!");

    if (menuCheckbox.checked) {
        navigationBar.classList.remove("left-[-100vw]");
        navigationBar.classList.add("left-0");
    } else {
        navigationBar.classList.remove("left-0");
        navigationBar.classList.add("left-[-100vw]");
    }
});

window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
        navigationBar.classList.remove("left-0");
        navigationBar.classList.add("left-[-100vw]");
        menuCheckbox.checked = false;
    }
});
