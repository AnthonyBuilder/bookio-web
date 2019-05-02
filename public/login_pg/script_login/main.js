
var form = document.querySelector('#form_login');

function loginUser() {
    var form_d = new FormData(form);
    xhttpGet('ajax/loginUser', function () {
        success(() => {
            console.log("Logado");
            var el = JSON.parse(xhttp.responseText);
            el.forEach(function (element) {
                if (element.email_u === "anthonyj2017@icloud.com") {
                    console.log('logado como ' + element.email_u);
                }
            });
        });
    }, form_d);
}