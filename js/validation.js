//Login forma
const loginForm = new window.JustValidate("#login_form");

loginForm
    .addField("#email", [
        {
            rule: "required",
        },
        {
            rule: "email",
        },
    ])
    .addField("#lozinka", [
        {
            rule: "required",
        },
    ])
    .onSuccess((event) => {
        document.getElementById("login_form").submit();
    });

//Registracija forma
const registerForm = new window.JustValidate("#register_form");

registerForm
    .addField("#ime", [
        {
            rule: "required",
        },
    ])
    .addField("#prezime", [
        {
            rule: "required",
        },
    ])
    .addField("#reg-email", [
        {
            rule: "required",
        },
        {
            rule: "email",
        },
    ])
    .addField("#telefon", [
        {
            rule: "required",
        },
        {
            rule: "customRegexp",
            value: /[a-z]/gi,
        },
    ])
    .addField("#adresa", [
        {
            rule: "required",
        },
    ])
    .addField("#reg-lozinka", [
        {
            rule: "required",
        },
        {
            rule: "password",
        },
    ])
    .onSuccess((event) => {
        document.getElementById("register_form").submit();
    });
