function val (){

    var senha = mudarsenha.novasenha;
    var senhac = mudarsenha.novasenhac;

    if(senha != senhac){
        alert ('Confirmação de senha invalida.');
        senha.focus();
    }

}