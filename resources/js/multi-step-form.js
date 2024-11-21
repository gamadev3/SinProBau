let currentTab = 0;

const previousTabButton = document.getElementById("prevBtn");
const nextTabButton = document.getElementById("nextBtn");
const steps = document.querySelectorAll(".step");
const stepIndicators = document.querySelectorAll(".stepIndicator");

previousTabButton?.addEventListener("click", () => updateTab(-1));

nextTabButton?.addEventListener("click", () => updateTab(1));

// Este arquivo está sendo acessado por todas as telas do layout main, então algumas delas apresentam erro ao tentar ler algumas variáveis que acabam sendo nulas, e como showTab é uma função executada logo após a página ser renderizada, é necessário verificar se as variáveis envolvidas nela existem.
if (previousTabButton && nextTabButton) {
    showTab(currentTab);
}

function showTab(currentTab) {
    steps.forEach((step, index) => {
        step.style.display = currentTab === index ? "block" : "none";
    });

    previousTabButton.style.display = currentTab === 0 ? "none" : "block";

    if (currentTab == steps.length - 1) {
        nextTabButton.type = "submit";
        nextTabButton.innerHTML = "Enviar";
    } else {
        nextTabButton.type = "button";
        nextTabButton.innerHTML = "Próximo";
    }

    fixStepIndicator(currentTab);
}

function updateTab(step) {
    const newTab = currentTab + step;

    if (newTab < 0 || newTab >= steps.length) {
        document.getElementById("send-email-form").submit();
        return;
    }

    currentTab = newTab;
    showTab(currentTab);
}

function fixStepIndicator(currentTab) {
    stepIndicators.forEach((indicator, index) => {
        stepIndicators[index].classList.remove("text-[#138942]");

        const disabledIndicator = indicator.querySelector("span");
        disabledIndicator.classList.add("bg-gray-50");
        disabledIndicator.classList.add("border-2");
        disabledIndicator.classList.remove("text-white");

        if (index === currentTab) {
            stepIndicators[index].classList.add("text-[#138942]");
        }

        const stepIndicator = stepIndicators[currentTab].querySelector("span");
        stepIndicator.classList.remove("bg-gray-50");
        stepIndicator.classList.remove("border-2");
        stepIndicator.classList.add("bg-[#138942]");
        stepIndicator.classList.add("text-white");
    });
}
