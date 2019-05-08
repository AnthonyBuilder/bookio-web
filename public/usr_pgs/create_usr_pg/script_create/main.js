var form = document.getElementsByTagName('form')[0];
var email = document.getElementsByTagName('input')[0];
var pass = document.getElementsByTagName('input')[1];
var body = document.getElementsByTagName('body')[0];

var log_txt = document.querySelector('#title-log');
var user_txt = document.querySelector('#title-user');

function loginUser() {

    var form_d = new FormData(form);
    xhttpPost('ajax/loginUser', function () {

        befforeSend(function () {
            body.style.background = "#5e5e5e";
            body.style.color = "grey";
            log_txt.innerHTML = "Validando...";
            user_txt.innerHTML = "";
        });

        success(() => {

            console.log(xhttp.responseText);
            var us = JSON.parse(xhttp.responseText);

            if (email.value === us.email_u && pass.value === us.pass_u) {
                body.style.color = "#2fd472";
                log_txt.innerHTML = "Logado como";
                user_txt.innerHTML = us.nome_user;
            } else {
                body.style.color = "#ff4f4f";
                log_txt.innerHTML = "";
                user_txt.innerHTML = "Houve um erro";
            }

        });

        error(() => {

            body.style.background = "#ff4f4f";
            log_txt.innerHTML = "";
            user_txt.innerHTML = "Houve um erro com o servidor";
        });

    }, form_d);
}