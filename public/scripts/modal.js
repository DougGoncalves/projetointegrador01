//Abre o Modal após 5 segundos
function abreModal(){
    document.getElementById('modal-newsletter').style.display = "flex";
}
setTimeout(abreModal, 5000);


//Fechamento da Modal via botão X
var fecharModal = document.getElementById("fechar");

fecharModal.addEventListener('click', function() {
document.getElementById('modal-newsletter').style.display = "none";
});