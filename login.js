const form = document.querySelector("#login")
const email = document.querySelector("#email")
const senha = document.querySelector("#senha")

form.addEventListener("submit", (event)=> {
    event.preventDefault();
    
    // verificar o email
    if(email.value === "" || !validar_email(email.value)){
        alert("Por favor preencha o seu email")
        return;
    }

    // verificar se o senha está  vázio
    if(senha.value === ""){
        alert("Por favor preencha o sua senha")
        return;
    }
    // se todos os campos estiverem correctamente preenchidos, envie o form
    form.submit();
})

// email válido
function validar_email(email){
    // criar uma regex para validar o email
    const validar = new RegExp(
        //usuario@dominio.com
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
    );

    if(validar.test(email)){
        return true;
    }
    else{
        return false;
    }
}
