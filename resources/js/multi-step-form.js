let currentTab = 0;

const previousTabButton = document.getElementById("prevBtn");
const nextTabButton = document.getElementById("nextBtn");
const steps = document.querySelectorAll(".step");

previousTabButton.addEventListener("click", () => {
    nextPrev(-1);
});

nextTabButton.addEventListener("click", () => {
    nextPrev(1);
});

showTab(currentTab);

function showTab(currentTab) {
    for (let i = 0; i < steps.length; i++) {
        steps[i].style.display = "none";
    }

    steps[currentTab].style.display = "block";

    if (currentTab == 0) {
        previousTabButton.style.display = "none";
    } else {
        previousTabButton.style.display = "block";
    }

    fixStepIndicator(currentTab);
}

function nextPrev(step) {
    steps[currentTab].style.display = "none";

    const newTab = currentTab + step;

    if (newTab < 0 || newTab >= steps.length) {
        return;
    }

    currentTab = newTab;
    showTab(currentTab);
}

function fixStepIndicator(currentTab) {
    const stepIndicators = document.querySelectorAll(".stepIndicator");

    for (let i = 0; i < stepIndicators.length; i++) {
        stepIndicators[i].classList.remove("text-[#138942]");

        const verifiedImage = stepIndicators[i].querySelector("img");
        if (verifiedImage) {
            stepIndicators[i].removeChild(verifiedImage);
        }
    }

    stepIndicators[currentTab].classList.add("text-[#138942]");

    const verifiedImage = document.createElement("img");
    verifiedImage.src = "/images/icons/verified.svg";
    verifiedImage.alt = "Verificado";

    stepIndicators[currentTab].insertBefore(
        verifiedImage,
        stepIndicators[currentTab].firstChild
    );
}
