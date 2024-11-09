const menu = document.querySelector(".menu");
const menuCheckbox = document.querySelector(".menuCheckbox");
const navigationBar = document.querySelector(".navigation-bar");

function toggleNavigationBar(isOpen) {
    navigationBar.classList.toggle("left-0", isOpen);
    navigationBar.classList.toggle("left-[-100vw]", !isOpen);
}

menu.addEventListener("click", () => {
    toggleNavigationBar(menuCheckbox.checked);
});

window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
        toggleNavigationBar(false);
        menuCheckbox.checked = false;
    }
});

document.addEventListener("click", ({ target }) => {
    const isClickedOutside =
        !navigationBar.contains(target) && !menu.contains(target);
    if (isClickedOutside && menuCheckbox.checked) {
        toggleNavigationBar(false);
        menuCheckbox.checked = false;
    }
});
