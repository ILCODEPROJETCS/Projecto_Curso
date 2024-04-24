
//Script da aba página inicial
// Função para o slide

let count = 1
let aux;
document.getElementById('radio1').checked = true
setInterval( function(){
    nextImage();
}, 5000);
function nextImage(){
    count++;
    if (count > 4) {
        count= 1;
    }
    document.getElementById('radio'+count).checked = true

    if(count == 1){
        document.querySelector('.slide-first').classList.add("ativo");
        document.querySelector('.slide-ter').classList.remove("ativo");
        document.querySelector('.slide-seg').classList.remove("ativo");
        document.querySelector('.slide-quart').classList.remove("ativo");
    }
    else
    if(count == 2){
        document.querySelector('.slide-seg').classList.add("ativo");
        document.querySelector('.slide-first').classList.remove("ativo");
        document.querySelector('.slide-ter').classList.remove("ativo");
        document.querySelector('.slide-quart').classList.remove("ativo");
    }
    else
    if(count == 3){
        document.querySelector('.slide-ter').classList.add("ativo");
        document.querySelector('.slide-seg').classList.remove("ativo");
        document.querySelector('.slide-first').classList.remove("ativo");
        document.querySelector('.slide-quart').classList.remove("ativo");
    }
    else
    if(count == 4){
        document.querySelector('.slide-ter').classList.remove("ativo");
        document.querySelector('.slide-seg').classList.remove("ativo");
        document.querySelector('.slide-first').classList.remove("ativo");
        document.querySelector('.slide-quart').classList.add("ativo");
    }
}

//Clicando do botão menu
function MostrarMenu(){
    let div = document.querySelector('.mobile_menu')
    let btn_bar = document.getElementById('btn1')
    if (div.classList.contains('open')) {
        div.classList.remove('open')
        btn_bar.innerHTML = '<s><i class="fa-solid fa-bars"></i></s>'
    } else {
        div.classList.add('open')
        btn_bar.innerHTML = '<s><i class="fa-solid fa-x"></i></s>'
    }   
}

//Em caso a tela esteja cheia e o menu lateral estiver aberto 
if (Number(document.body.style.maxWidth) > 768) {   
    let div = document.querySelector('.mobile_menu')
    if (div.classList.contains('open')) {
        div.classList.remove('open')
    }
}