/*SCRIPT DO FORMULÁRIO*/
const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const tel = document.getElementById("tel");


form.addEventListener("submit", (e) => {
    e.preventDefault(); /*Para previnir o recarregamento instantâneo da página.*/

    ChecarInputs();
});

function ChecarInputs() {
    const usernameValue = username.value;
    const emailValue = email.value;
    const telValue = tel.value;

    if (usernameValue === "") {
        setErrorFor(username, "Obrigatório preencher o nome completo.");
    } else {
        setSuccessFor(username)
    }

    if (emailValue === "") {
        setErrorFor(email, "Obrigatório preencher o e-mail de contato.");
    } else {
        setSuccessFor(email)
    }

    if (telValue === "") {
        setErrorFor(tel, "Obrigatório preencher o número para contato.");
    } else {
        setSuccessFor(tel)
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    //setar qual a mensagem de erro.
    small.innerText = message;
    //setar classe de error.
    formControl.className = "formcontrol error";
}

function setSuccessFor(input) {
    const formControl = input.parentElement;

    // setar como sucesso
    formControl.className = "formcontrol success"
}
