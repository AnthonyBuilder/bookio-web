var form = document.getElementsByTagName('form')[0];
var div_gen_book = document.querySelector('.row-products');
var clear_doc_itm = document.querySelectorAll('.bk-itm-clear');

function createBook() {
    var formBook = new FormData(form);
    xhttpPost('ajax/create_book', function () {
        success(function () {
            console.log(xhttp.responseText);
        });
    }, formBook);
}

function getBooks() {
    xhttpGet('ajax/get_book', function () {
        success(function () {
            var itm_book = JSON.parse(xhttp.responseText);
            itm_book.forEach((element) => {
                new constructBook(element.book_name, element.book_price, element.book_img);
            });
        });
    });
}
