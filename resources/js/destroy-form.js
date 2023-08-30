const forms = document.querySelectorAll(".destroy-form");

forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const name = form.dataset.name;

        const is_confirmed = confirm(
            `Sei sicuro di voler cancellare ${name} dalla lista?`
        );

        if (is_confirmed) form.submit();
    });
});
