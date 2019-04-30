
var form = document.getElementsByTagName('form')[0];

function createBook() {
    var formBook = new FormData(form);

    xhttpPost('ajax/create_book', function () {
        success(function () {
            console.log(xhttp.responseText);
        });
    }, formBook);
}

