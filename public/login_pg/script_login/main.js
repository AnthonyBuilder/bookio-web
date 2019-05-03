var email = document.getElementsByTagName('input')[0];
var pass = document.getElementsByTagName('input')[1];
var body = document.getElementsByTagName('body')[0];

var log_txt = document.querySelector('#title-log');
var user_txt = document.querySelector('#title-user');
function loginUser() {
    var url = new URL("http://localhost/bookio-web/public/login_pg/index.php?email='x'");
    url.searchParams.append('x', email.value);

    xhttpGet('ajax/loginUser', function () {
        befforeSend(function () {
            body.style.background = "#5e5e5e";
            body.style.color = "grey";
            console.log("validando...");
        })
        success(() => {
            var el = JSON.parse(xhttp.responseText);
            console.log(el);
            console.log(xhttp.responseText);
            el.forEach(function (element) {
                console.log(element.email_u);
                if (email.value === element.email_u && pass.value === element.pass_u) {
                    body.style.color = "#2fd472";
                    log_txt.innerHTML = "Logado como";
                    user_txt.innerHTML = element.email_u;
                } else {
                    body.style.color = "#ff4f4f";
                    log_txt.innerHTML = "";
                    user_txt.innerHTML = "Houve um erro";
                }
            });
        });
    });
}