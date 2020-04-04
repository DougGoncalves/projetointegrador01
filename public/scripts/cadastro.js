window.onload = function() {
	//listener para click do checkbox que marca/desmarca todos
	if(document.getElementById("todos")) {
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
}

var getEmail = document.querySelector('input#email');
var getSenha = document.querySelector('input#senha');
var getConfirmaSenha = document.querySelector('input#password-confirm');
var getNome = document.querySelector('input#nome');
var getCpf = document.querySelector('input#cpf');
var getFoneUm = document.querySelector('input#telefoneUm');
var getFoneDois = document.querySelector('input#telefoneDois');


function validaNome() {
	document.addEventListener('keyup', function(evento) {
		nomecheck = document.querySelector('li.namecheck');
		ulVisible = document.querySelector('li.namecheck').parentElement;
		console.log(ulVisible);
		
		if (!getNome.value.match(/[A-Za-z]+\ [A-Za-z]+/g)) {
			nomecheck.classList.add('invalido');
			nomecheck.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			nomecheck.classList.add('valido');
			nomecheck.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
		}
		console.log(nomecheck.classList);
		for ( var i = 0; i < nomecheck.classList.length; i++) {		
			if (nomecheck.classList[i] == 'invalido') {
				document.querySelector('button.btn-novalidate').setAttribute('disabled', 'disbaled');
			} else {
				document.querySelector('button.btn-novalidate').removeAttribute('disabled');
		}
	}});
};

function validaCpf() {
	document.addEventListener('keyup', function(evento) {
		cpfcheck = document.querySelector('li.cpfcheck');
		ulVisible = document.querySelector('li.cpfcheck').parentElement;
		
		if (!getCpf.value.match(/([0-9]{3}[\.][0-9]{3}[\.][0-9]{3}[-][0-9]{2})/g)) {
			cpfcheck.classList.add('invalido');
			cpfcheck.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			cpfcheck.classList.add('valido');
			cpfcheck.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
		}
	});
};

function validaEmail() {
		document.addEventListener('keyup', function(evento) {
			mailcheck = document.querySelector('li.mailcheck');
			ulVisible = document.querySelector('li.mailcheck').parentElement;

			if (!getEmail.value.match(/[A-Za-z0-9.-]+@[A-Za-z]+\.[A-Za-z]+.[A-Za-z]+/g)) {
					mailcheck.classList.add('invalido');
					mailcheck.classList.remove('valido');
					ulVisible.classList.add('valida-entrada-invalido');
					ulVisible.classList.remove('valida-entrada');
				} else {
					mailcheck.classList.remove('invalido');
					mailcheck.classList.add('valido');
					ulVisible.classList.add('valida-entrada');
					ulVisible.classList.remove('valida-entrada-invalido');
				}

			for ( var i = 0; i < mailcheck.classList.length; i++) {		
				if (mailcheck.classList[i] == 'invalido') {
					document.querySelector('button.btn-novalidate').setAttribute('disabled', 'disbaled');
				} else {
					document.querySelector('button.btn-novalidate').removeAttribute('disabled');
			}

			}


		});
};


function validaSenha() {
	document.addEventListener('keyup', function(evento)
	{
		passchksize = document.querySelector('li.passchksize');
		ulVisible = document.querySelector('li.passchksize').parentElement;
		if (getSenha.value.length < 8) {
			passchksize.classList.add('invalido');
			passchksize.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			passchksize.classList.add('valido');
			passchksize.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
			
		};
		passchknumero = document.querySelector('li.passchknumero');
		if (!getSenha.value.match(/[0-9]/g)) {
			passchknumero.classList.add('invalido');
			passchknumero.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			passchknumero.classList.add('valido');
			passchknumero.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
		};
		passchklmin = document.querySelector('li.passchklmin');
		if (!getSenha.value.match(/[a-z]/g)) {
			passchklmin.classList.add('invalido');
			passchklmin.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			passchklmin.classList.add('valido');
			passchklmin.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
		};
		passchklmai = document.querySelector('li.passchklmai');
		if (!getSenha.value.match(/[A-Z]/g)) {
			passchklmai.classList.add('invalido');
			passchklmai.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			passchklmai.classList.add('valido');
			passchklmai.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
		};
		passespecial = document.querySelector('li.passespecial');
		if (!getSenha.value.match(/[\!\@\#\$\%\^\&\*]/g)) {
			passespecial.classList.add('invalido');
			passespecial.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			passespecial.classList.add('valido');
			passespecial.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
		};
		if (passchksize.classList[1] == 'invalido' || passchknumero.classList[1] == 'invalido' || passchklmin.classList[1] == 'invalido' || passchklmai.classList[1] == 'invalido' || passespecial.classList[1] == 'invalido') {
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		}
	});
}

function confirmaSenha() {
	document.addEventListener('keyup', function(evento)
	{
		passconfirm = document.querySelector('li.passconfirm');
		ulVisible = document.querySelector('li.passconfirm').parentElement;
		if (getConfirmaSenha.value != getSenha.value) {
			passconfirm.classList.add('invalido');
			passconfirm.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
	} else {
		passconfirm.classList.add('valido');
		passconfirm.classList.remove('invalido');
		ulVisible.classList.add('valida-entrada');
		ulVisible.classList.remove('valida-entrada-invalido');
	}
});
};

function validaFoneUm() {
	document.addEventListener('keyup', function(evento) {
		fonecheck = document.querySelector('li.telefonecheck');
		ulVisible = document.querySelector('li.telefonecheck').parentElement;	
		if (!getFoneUm.value.match(/([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])/g)) {
			fonecheck.classList.add('invalido');
			fonecheck.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			fonecheck.classList.add('valido');
			fonecheck.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
		}
	});
};

function validaFoneDois() {
	document.addEventListener('keyup', function(evento) {
		fonecheck = document.querySelector('li.telefonecheckdois');
		ulVisible = document.querySelector('li.telefonecheckdois').parentElement;			
		if (!getFoneDois.value.match(/([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])/g)) {
			fonecheck.classList.add('invalido');
			fonecheck.classList.remove('valido');
			ulVisible.classList.add('valida-entrada-invalido');
			ulVisible.classList.remove('valida-entrada');
		} else {
			fonecheck.classList.add('valido');
			fonecheck.classList.remove('invalido');
			ulVisible.classList.add('valida-entrada');
			ulVisible.classList.remove('valida-entrada-invalido');
		}
	});
};
