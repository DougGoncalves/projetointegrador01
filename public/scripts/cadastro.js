window.onload = function() {
    //listener para click do checkbox que marca/desmarca todos
    document.getElementById("todos").onclick = function() {
        var form = document.getElementById("myForm"); //formulário
        //percorre todos os checkboxes e seta se está ou não checado, conforme o valor do check mandatório
        var checks = form.getElementsByTagName("input");
        for(var i=0; i<checks.length; i++) {
            var chk = checks[i];
            if(chk.name == "check[]")
                chk.checked = this.checked;
        }
    }   
}