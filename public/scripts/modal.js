//Abre o Modal após 10 segundos
function openModal(){
    document.getElementById('modal-newsletter').style.display = "flex";
}
setTimeout(openModal, 10000);

//Fecha o Modal pressionando a tecla Esc
function closedModal(event){
    if(event.keyCode == 27){
        document.getElementById('modal-newsletter').style.display = "none";
    }
}

//Fecha o Modal via botão X
var fecharModal = document.getElementById("fechar");

fecharModal.addEventListener('click', function() {
document.getElementById('modal-newsletter').style.display = "none";
});



