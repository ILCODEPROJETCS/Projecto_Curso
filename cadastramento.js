const form = document.querySelector("#cadastrar")
const nome = document.querySelector("#nome")
const Sobrenome = document.querySelector("#sobrenome")
const email = document.querySelector("#email")
const confirmEmail = document.querySelector("#email_confirm")
const senha = document.querySelector("#senha")
const confimSenha = document.querySelector("#senha_confirm")
const job = document.querySelector("#job")
const numero = document.querySelector("#numero")

form.addEventListener("submit", (event) =>{
    event.preventDefault();

    //verificar se o nome está vázio
    if(nome.value === ""){
        alert("Por favor preencha o seu nome")
        return;
    }
     //verificar se o sobrenome está vázio
     if(Sobrenome.value === ""){
        alert("Por favor preencha o seu sobrenome")
        return;
    }

    // verificar o email
    if(email.value === "" || !validar_email(email.value)){
        alert("Por favor preencha o seu email")
        return;
    }
    if(confirmEmail.value === "" || !validar_email(email.value)){
        alert("Por favor confirme o seu email")
        return;
    }
    if(!(email.value === confirmEmail,value)){
        alert("O email e a confirmação do email\nsão diferentes")
    }
    // verificar se o número está  vázio
    if(numero.value === ""){
        alert("Por favor preencha o seu número")
        return;
    }
      //verificar a selecão 
    if(job.value === ""){
       alert("Por favor seleccione a sua situação.")
       return
    }
    // verificar se o senha está  vázio
    if(senha.value === ""){
        alert("Por favor preencha o sua senha")
        return;
    }
    if(confimSenha.value === ""){
        alert("Por favor confirme a sua senha")
        return;
    }
    if(!(senha.value === confimSenha.value)){
        alert("A senha e a confirmação da senha\nsão diferentes")
    }
    //verificar a senha
    if(!validar_senha(senha.value, 8)){
        alert("A senha precisa no mínimo 8 dígitos.")
        return;
    }
    if(!validar_senha(confimSenha.value, 8)){
        alert("A senha precisa no mínimo 8 dígitos.")
        return;
    }
    // se todos os campos estiverem correctamente preenchidos, envie o form
    form.submit();
});

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
// validar a senha
function validar_senha(senha, min_digitos){
    //válida
    if(senha.length >= min_digitos){
        return true;
    }
    //inválida
    else{
        return false;
    }
}
