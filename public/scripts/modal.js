//==== Fecha o Modal pressionando a tecla Esc ====//
function closedModal(event){
    if(event.keyCode == 27){
        document.getElementById('modal-newsletter').style.display = "none";
    }
}

//==== Fecha o Modal via botão X ====//
var fecharModal = document.getElementById("fechar");

fecharModal.addEventListener('click', function() {
document.getElementById('modal-newsletter').style.display = "none";

//Ao clicar para fechar a Modal é criado o Cookie: cookieModal
document.cookie = "cookieModal="+fecharModal+" ; patch=http://127.0.0.1:8000/";
});


/*==== Após o carregamento da pagina se o cookie existir ele não abre a Modal
e se não existir ele abre após 10 segundos ====*/
window.addEventListener('load', function(){
    if(document.cookie.indexOf("cookieModal") > 0){
            document.getElementById('modal-newsletter').style.display = "none";

    }else{
        document.getElementById('modal-newsletter').style.display = "flex";

        setTimeout(openModal, 10000);
    }
});