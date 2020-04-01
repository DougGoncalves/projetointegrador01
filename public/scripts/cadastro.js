window.onload = function() {
    //listener para click do checkbox que marca/desmarca todos
    document.getElementById("todos").onclick = function() {
        var form = document.getElementById("myForm"); //formulário
        //percorre todos os checkboxes e seta se está ou não checado, conforme o valor do check mandatório
        var checks = form.getElementsByClassName("form-check-input");
        for(var i=0; i<checks.length; i++) {
            var chk = checks[i];
            if(chk.className == "form-check-input")
                chk.checked = this.checked;
        }
	}
}

var getEmail = document.querySelector('input#email');
var getSenha = document.querySelector('input#senha');
var getConfirmaSenha = document.querySelector('input#password-confirm');

function validaEmail() {
		document.addEventListener('keyup', function(evento) {
			mailcheck = document.querySelector('li.mailcheck');
			if (!getEmail.value.match(/[A-Za-z0-9.-]+@[A-Za-z]+\.[A-Za-z]+.[A-Za-z]+/g)) {
					mailcheck.classList.add('invalido');
					mailcheck.classList.remove('valido');
				} else {
					mailcheck.classList.remove('invalido');
					mailcheck.classList.add('valido');
				}
		});
};

function validaSenha() {
	document.addEventListener('keyup', function(evento)
	{
		passchksize = document.querySelector('li.passchksize');
		if (getSenha.value.length < 8) {
			passchksize.classList.add('invalido');
			passchksize.classList.remove('valido');
		} else {
			passchksize.classList.add('valido');
			passchksize.classList.remove('invalido');
		};
		passchknumero = document.querySelector('li.passchknumero');
		if (!getSenha.value.match(/[0-9]/g)) {
			passchknumero.classList.add('invalido');
			passchknumero.classList.remove('valido');
		} else {
			passchknumero.classList.add('valido');
			passchknumero.classList.remove('invalido');
		};
		passchklmin = document.querySelector('li.passchklmin');
		if (!getSenha.value.match(/[a-z]/g)) {
			passchklmin.classList.add('invalido');
			passchklmin.classList.remove('valido');
		} else {
			passchklmin.classList.add('valido');
			passchklmin.classList.remove('invalido');
		};
		passchklmai = document.querySelector('li.passchklmai');
		if (!getSenha.value.match(/[A-Z]/g)) {
			passchklmai.classList.add('invalido');
			passchklmai.classList.remove('valido');
		} else {
			passchklmai.classList.add('valido');
			passchklmai.classList.remove('invalido');
		};
		passespecial = document.querySelector('li.passespecial');
		if (!getSenha.value.match(/[\!\@\#\$\%\^\&\*]/g)) {
			passespecial.classList.add('invalido');
			passespecial.classList.remove('valido');
		} else {
			passespecial.classList.add('valido');
			passespecial.classList.remove('invalido');
		};
	});
}

function confirmaSenha() {
	document.addEventListener('keyup', function(evento)
	{
		passconfirm = document.querySelector('li.passconfirm');
		if (getConfirmaSenha.value != getSenha.value) {
			passconfirm.classList.add('invalido');
			passconfirm.classList.remove('valido');
	} else {
		passconfirm.classList.add('valido');
		passconfirm.classList.remove('invalido');
	}
});
};

