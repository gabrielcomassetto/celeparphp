function valida (){

    var email = form.email;
    var senha = form.senha;


if(email.value == "" && senha.value == ""){
    alert ("Preencha o campo de email e senha!");
    email.focus();
}

if(email.value == ""){
    alert("Preencha o campo de email!");
    email.focus();
}

if(senha.value == "" || senha.value.length < 6 && senha.value.length > 8){
    alert ("Preencha corretamente a senha!");
    senha.focus();
}
}