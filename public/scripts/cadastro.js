window.onload = function () {
    //listener para click do checkbox que marca/desmarca todos
    if (document.getElementById("todos")) {
        document.getElementById("todos").onclick = function () {
            var form = document.getElementById("myForm"); //formulário
            //percorre todos os checkboxes e seta se está ou não checado, conforme o valor do check mandatório
            var checks = form.getElementsByClassName("form-check-input");
            for (var i = 0; i < checks.length; i++) {
                var chk = checks[i];
                if (chk.className == "form-check-input")
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
var nomecheck = document.querySelector('li.namecheck');
var cpfcheck = document.querySelector('li.cpfcheck');
var mailcheck = document.querySelector('li.mailcheck');
var passchksize = document.querySelector('li.passchksize');
var	passchknumero = document.querySelector('li.passchknumero');
var	passchklmin = document.querySelector('li.passchklmin');
var passchklmai = document.querySelector('li.passchklmai');
var passespecial = document.querySelector('li.passespecial');
var passconfirm = document.querySelector('li.passconfirm');
var fonecheck = document.querySelector('li.telefonecheck');
var fonecheckdois = document.querySelector('li.telefonecheckdois');


function validaNome() {
    document.addEventListener('keyup', function (evento) {
        ulVisible = document.querySelector('li.namecheck').parentElement;

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
    });
};

function validaCpf() {
    document.addEventListener('keyup', function (evento) {
        ulVisible = document.querySelector('li.cpfcheck').parentElement;

        if (!getCpf.value.match(/([0-9]{3}[\.][0-9]{3}[\.][0-9]{3}[-][0-9]{2})/g) && !getCpf.value.match(/(^[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{2}$)/g)) {
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
    document.addEventListener('keyup', function (evento) {
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

		if (document.querySelector('div#emailexiste')) {
		 	alertVisible = document.querySelector('div#emailexiste');
		 	alertVisible.classList.add('hidealert');
		}

        if(document.querySelector('button.btn-prosseguir')) {
        for (var i = 0; i < mailcheck.classList.length; i++) {
            if (mailcheck.classList[i] == 'invalido') {
                document.querySelector('button.btn-prosseguir').setAttribute('disabled', 'disbaled');
            } else {
                document.querySelector('button.btn-prosseguir').removeAttribute('disabled');
                }

            }
        }


    });
};


function validaSenha() {
    document.addEventListener('keyup', function (evento) {
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
    document.addEventListener('keyup', function (evento) {
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
    document.addEventListener('keyup', function (evento) {
        ulVisible = document.querySelector('li.telefonecheck').parentElement;
        if (!getFoneUm.value.match(/([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]?[0-9])/g)) {
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
        document.addEventListener('keyup', function (evento) {
		ulVisible = document.querySelector('li.telefonecheckdois').parentElement;
		check = 'fonecheck';
        if (!getFoneDois.value.match(/([0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]?[0-9])/g)) {
            fonecheckdois.classList.add('invalido');
            fonecheckdois.classList.remove('valido');
            ulVisible.classList.add('valida-entrada-invalido');
            ulVisible.classList.remove('valida-entrada');
        } else {
            fonecheckdois.classList.add('valido');
            fonecheckdois.classList.remove('invalido');
            ulVisible.classList.add('valida-entrada');
            ulVisible.classList.remove('valida-entrada-invalido');
		}
    });
};

function validaBtn() {

	// for (var i = 0; i < document.querySelectorAll('li').length; i++) {
	// 	if (nomecheck.classList[i] == 'valido'
    //     && cpfcheck.classList[i] == 'valido' 
    //     && mailcheck.classList[i] == 'valido'
    //     && passchksize.classList[i] == 'valido'
    //     && passchknumero.classList[i] == 'valido'
    //     && passchklmin.classList[i] == 'valido' 
    //     && passchklmai.classList[i] == 'valido' 
    //     && passespecial.classList[i] == 'valido'
    //     && passconfirm.classList[i] == 'valido'
    //     && fonecheck.classList[i] == 'valido'
    //     && fonecheckdois.classList[i] == 'valido') {
    //         console.log("Entrei");
    //         console.log((nomecheck.classList[i] == 'valido' && cpfcheck.classList[i] == 'valido' 
    //         && mailcheck.classList[i] == 'valido' && passchksize.classList[i] == 'valido'
    //          && passchknumero.classList[i] == 'valido' && passchklmin.classList[i] == 'valido' 
    //          && passespecial.classList[i] == 'valido' && passconfirm.classList[i] == 'valido'));
	// 		document.querySelector('button.btn-novalidate').removeAttribute('disabled');
	// 		break;
	// 	} else {
	// 		console.log("Sai");
    //         document.querySelector('button.btn-novalidate').setAttribute('disabled', 'disabled');
	// 	}
	// }
}

function checkForm() {
    if (document.querySelector('li.namecheck.valido')
    && document.querySelector('li.cpfcheck.valido')
    && document.querySelector('li.mailcheck.valido')
    && document.querySelector('li.passchksize.valido')
    && document.querySelector('li.passchknumero.valido')
    && document.querySelector('li.passchklmin.valido')
    && document.querySelector('li.passchklmai.valido')
    && document.querySelector('li.passespecial.valido')
    && document.querySelector('li.passconfirm.valido')
    && document.querySelector('li.telefonecheck.valido')
    && document.querySelector('li.telefonecheckdois.valido')) {
        console.log(document.querySelector('li.nomecheck.valido'));
console.log(document.querySelector('li.cpfcheck.valido'));
console.log(document.querySelector('li.mailcheck.valido'));
console.log(document.querySelector('li.passchksize.valido'));
console.log(document.querySelector('li.passchknumero.valido'));
console.log(document.querySelector('li.passchklmin.valido'));
console.log(document.querySelector('li.passchklmai.valido'));
console.log(document.querySelector('li.passespecial.valido'));
console.log(document.querySelector('li.passconfirm.valido'));
console.log(document.querySelector('li.telefonecheck.valido'));
console.log(document.querySelector('li.telefonecheckdois.valido'));
        console.log('Form Validado OK');
        return true;
    } else {
        console.log(document.querySelector('li.namecheck.valido'));
console.log(document.querySelector('li.cpfcheck.valido'));
console.log(document.querySelector('li.mailcheck.valido'));
console.log(document.querySelector('li.passchksize.valido'));
console.log(document.querySelector('li.passchknumero.valido'));
console.log(document.querySelector('li.passchklmin.valido'));
console.log(document.querySelector('li.passchklmai.valido'));
console.log(document.querySelector('li.passespecial.valido'));
console.log(document.querySelector('li.passconfirm.valido'));
console.log(document.querySelector('li.telefonecheck.valido'));
console.log(document.querySelector('li.telefonecheckdois.valido'));
        console.log('Estranho');
        return false;
    }
    

}
