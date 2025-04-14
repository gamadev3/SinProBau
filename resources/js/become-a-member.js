const rgInput = document.getElementById("rg");
const cpfInput = document.getElementById("cpf");
const phoneInput = document.getElementById("phone");

rgInput?.addEventListener("input", ({ target }) => {
    let value = target.value;

    if (value.length != 11) {
        value = value.replace(/\D/g, "");

        value = value.replace(/(\d{2})(\d)/, "$1.$2");
        value = value.replace(/(\d{3})(\d)/, "$1.$2");

        if (value.length > 9) {
            value = value.replace(/(\d{3})(\d)/, "$1-$2");
        }

        value = value.substring(0, 12);

        rgInput.value = value;
    }
});

cpfInput?.addEventListener("input", ({ target }) => {
    let value = target.value;

    value = value.replace(/\D/g, "");

    value = value.replace(/(\d{3})(\d)/, "$1.$2");
    value = value.replace(/(\d{3})(\d)/, "$1.$2");
    value = value.replace(/(\d{3})(\d)/, "$1-$2");

    value = value.substring(0, 14);

    cpfInput.value = value;
});

phoneInput?.addEventListener("input", ({ target }) => {
    let value = target.value;

    value = value.replace(/\D/g, "");

    value = value.replace(/(\d{2})(\d)/, "($1) $2");
    value = value.replace(/(\d{4})(\d)/, "$1 $2");

    if (value.length > 15) {
        value = value.substring(0, 15);
    }

    phoneInput.value = value;
});
