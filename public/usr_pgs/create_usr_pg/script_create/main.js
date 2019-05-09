var form = document.getElementsByTagName('form')[0];

var nome_fin = document.getElementsByTagName('#nome-cadastro');
var enail_fin = document.getElementsByTagName('#email-cadastro');
var pass_fin = document.getElementsByTagName('#pass-cadastro');

var log_txt = document.querySelector('#title-log');
var user_txt = document.querySelector('#title-user');


function createUser() {

    var form_d = new FormData(form);
    
    xhttpPost('ajax/createUser', function () {
        befforeSend(() => {
            log_txt.innerHTML = "Enviando..."
            user_txt.innerHTML = "";
        });

        success(() => {
            log_txt.innerHTML = "Usuario ";
            user_txt.innerHTML = "cadastrado";
        });

        error(() => {
            log_txt.innerHTML = "Houve um Erro";
            user_txt = "";
        });

    }, form_d);
}