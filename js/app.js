var user = document.getElementById('user');
var senha = document.getElementById('senha');
var btnEnviar = document.getElementById('enviar');
var erros = document.getElementById('erro');
var formulario = document.getElementById('form')
var errocount = "";

function verificarCampos(event){
    event.preventDefault();
    errocount = "";
    user.style.borderColor = '';
    senha.style.borderColor = '';
    erros.innerHTML = '';
    erros.classList.remove('mostrar');
    erros.classList.add('esconder');
    if (user.value != "admin"){
        user.style.borderColor = 'red';
        errocount += "<br>Nome de usuário Incorreto!";  
    }
    if (senha.value != "admin"){
        senha.style.borderColor = 'red';
        errocount += "<br>Senha Incorreta!";
    }
     if (errocount !== "" ){
        erros.innerHTML = errocount;
        erros.classList.remove('esconder');
        erros.classList.add('mostrar');
    } else {
        document.getElementById('form').submit();
    }
}