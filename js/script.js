/*SCRIPT DO FORMULÁRIO*/
const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const tel = document.getElementById("tel");
const data = document.getElementById("data");


form.addEventListener("submit", (e) => {
    e.preventDefault(); /*Para previnir o recarregamento instantâneo da página.*/

    !ChecarInputs() ? false : enviarDados() ;
});

function enviarDados() {
    const dadosFormulario = new FormData(form);
  
    fetch('processar.php', {
      method: 'POST',
      body: dadosFormulario
    })
    .then(response => response.json())
    .then(data => {
      console.log(data);
    })
    .catch(error => console.log(error));
}


function ChecarInputs() {
    const usernameValue = username.value;
    const emailValue = email.value;
    const telValue = tel.value;

    if (usernameValue === "") {
        setErrorFor(username, "Obrigatório preencher o nome completo.");
        return false;
    } else {
        setSuccessFor(username)
    }

    if (emailValue === "") {
        setErrorFor(email, "Obrigatório preencher o e-mail de contato.");
        return false;
    } else {
        setSuccessFor(email)
    }

    if (telValue === "") {
        setErrorFor(tel, "Obrigatório preencher o número para contato.");
        return false;
    } else {
        setSuccessFor(tel)
    }

    return true
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
